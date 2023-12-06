<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Lien;
use App\Models\Departement;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LienRequest;

class LienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::debug("ICICI");
        $liens = Lien::where('departement', '=', Session::get('departement'))->get();
        $lian = Departement::where('id', '=', Session::get('departement'))->first();   
        return view('menus.liens', compact('liens','lian'));

    }

    public function spindex()
    {
        $departements = Departement::all();
        return view('menus.ajoutLien', compact('departements'));
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
    public function store(LienRequest $request)
    {
        Log::debug("ICICICICICI");
        $lien = new Lien($request->all());
        $lien->save();
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
