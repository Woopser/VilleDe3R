<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SituationRequest;
use App\Models\Situation;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class SituationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form/situationDang');
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
    public function store(SituationRequest $request)
    {
        Log::debug('ICI');
        $situations = new Situation($request->all());
        Log::debug($situations);

        $situations2 = new Situation();

        $situations2->matricule = Session::get('matricule');
        $situations2->superviseur = Session::get('superviseur');

        $situations2->fonction = $situations->fonction;
        $situations2->secteur = $situations->secteur;
        $situations2->dateObservation = $situations->dateObseration;
        $situations2->temoin = $situations->temoin;
        $situations2->lieu = $situations->lieu;
        $situations2->description  = $situations->description;
        $situations2->correction = $situations->correction;
        $situations2->dateRempli = Carbon::now();
        $situations2->dateObservation = $situations->dateObservation;
        $situations2->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
