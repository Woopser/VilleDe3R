<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accidentauto;
use App\Models\accidenttravail;
use App\Models\notification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Departement;
use App\Http\Requests\AccidentAutosRequest;
class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifs = notification::where('matriculeSuperviseur',Session::get('matricule'))->get();

        return View('/notification.index', compact('notifs'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        try{
            // Oublie pas de le faire dans un try/catch
            // va aller chercher la données associer au ID

            $notif = notification::find($id);

            // Regarde le type du formulaire remplit (typeFormualaire)

            if($notif->typeFormulaire = "accidentTravail"){

            //Va aller chercher le formulaire du type entre dans se cas accident de travail avec le id dans notifcation (idFormulaire)

            $forms = accidenttravail::where('id',$notif->idFormulaire)->get();

            //Retourne une vue du formulaire selectionner

            return View('/notification.accTravail', compact('forms',));

        }else if($notif->typeFormulaire == "accidentAuto"){

            $forms = accidentauto::where('id',$notif->idFormulaire)->get();

            return View('/notification.accAuto', compact('forms',));      

        }elseif($notif->typeFormulaire == "audit"){

            $forms = Audit::where('id',$notif->idFormulaire)->get();

            return View('/notification.audit', compact('forms',));      
       // }elseif($notif){

        }else{
            return;
        }
        }catch(\Throwable $e){
            Log::debug($e);
        }
       



    //Inutile présentement
        //$notifs = notification::all();
        //$accTravails = accidenttravail::all();
        //return View('/notification.show', compact('notifs','accTravails',));

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
