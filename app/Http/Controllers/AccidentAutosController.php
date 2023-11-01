<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accidentauto;
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
        Log::debug("ICi");
        
        $accidentAuto = new accidentauto($request->all());
        Log::debug($accidentAuto);
        Log::debug($accidentAuto->employeImpliquer);
        Log::debug($accidentAuto->numeroUnite);
        $accidentAuto2 = new accidentauto();
        $accidentAuto2->matricule = Session::get('matricule');
        $accidentAuto2->superviseur = Session::get('superviseur');
        $accidentAuto2->numeroUnite = $accidentAuto->numeroUnite;
        $accidentAuto2->departement = $accidentAuto->departement;
        $accidentAuto2->employeImpliquer = $accidentAuto->employeImpliquer;
        $accidentAuto2->numeroDePermis = $accidentAuto->numeroDePermis;
        $accidentAuto2->autreVehicule = $accidentAuto->autreVehicule;

        $accidentAuto2->save();
        return redirect()->back();

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
