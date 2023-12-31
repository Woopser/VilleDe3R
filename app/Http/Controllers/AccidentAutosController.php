<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accidentauto;
use App\Models\notification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Departement;
use App\Http\Requests\AccidentAutosRequest;

class AccidentAutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements = Departement::all();
        return View('form/accidentAuto', compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccidentAutosRequest $request)
    {
        try{
            
            Log::debug("ICi");
            $notification = new notification(); // Créer la variable pour les notifications
            $accidentAuto = new accidentauto($request->all());

            $accidentAuto2 = new accidentauto();

            if(Session::has('matricule')){
            $accidentAuto2->matricule = Session::get('matricule');
            $notification->matriculeEmploye = Session::get('matricule');
            Log::debug($notification->matricule);
            }

            if(Session::has('superviseur')){
            $accidentAuto2->superviseur = Session::get('superviseur');
            $notification->matriculeSuperviseur = Session::get('superviseur');
            }

            Log::debug($accidentAuto);
            Log::debug($accidentAuto->employeImpliquer);
            Log::debug($accidentAuto->numeroUnite);
      
            
           
            $accidentAuto2->numeroUnite = $accidentAuto->numeroUnite;
            $accidentAuto2->departement = $accidentAuto->departement;
            $accidentAuto2->employeImpliquer = $accidentAuto->employeImpliquer;
            $accidentAuto2->numeroDePermis = $accidentAuto->numeroDePermis;
            $accidentAuto2->autreVehicule = $accidentAuto->autreVehicule;
    
            $accidentAuto2->save();
            Log::debug("ICi2");
            //==========Notification================================                     
            $notification->typeFormulaire = "accidentAuto";
    
            $accAuto = accidentauto::all();
    
            $accAutoId = count($accAuto);
    
            $notification->idFormulaire =  $accAutoId;
            Log::debug("ICi3");
            $notification->save();
            return redirect()->route('menus.index');

        }
        catch(\Throwable $e){
        //Il y a une erreur 
        Log::debug($e);
        return redirect()->route('menus.index');  // retourne quand même au menu
        }

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
