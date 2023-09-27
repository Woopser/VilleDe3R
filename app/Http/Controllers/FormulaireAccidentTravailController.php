<?php

namespace App\Http\Controllers;

use App\Models\accidenttravail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Log;


class FormulaireAccidentTravailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Session::has('matricule')){
            $matricule = Session::get('matricule');//cherche la matricule de l'employer connecter
            Log::debug(Session::get('matricule')); //test
            $personne = User::where('matricule','=',$matricule)->first();//s'assure qu'il l'a dans la base de donner 
            return view('form/declarationAccident', compact('personne'));//renvoit au formualire a remplir
        }
        else{
            Log::debug(Session::all());
        }
            
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
    public function show(FormulaireAccidentTravail $formulaireAccidentTravail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormulaireAccidentTravail $formulaireAccidentTravail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormulaireAccidentTravail $formulaireAccidentTravail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormulaireAccidentTravail $formulaireAccidentTravail)
    {
        //
    }
}
