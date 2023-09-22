<?php

namespace App\Http\Controllers;

use App\Models\accidenttravail;
use Illuminate\Http\Request;

class FormulaireAccidentTravailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matricule = Session::get('matricule');
        //renvoit au formualire a remplir
        return view('form/declarationAccident', compact('matricule'));
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
