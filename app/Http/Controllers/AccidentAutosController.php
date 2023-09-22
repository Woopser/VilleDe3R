<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accidentauto;
use Illuminate\Support\Facades\Log;


class AccidentAutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('form/accidentAuto');
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
        Log::debug("ICi");
        $accidentAuto = new accidentauto($request->all());
        //$accidentAuto->numeroUnite = $request->numUnit;
        //$accidentAuto->departmenet = $request->dept;
        Log::debug($accidentAuto->dept);
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
