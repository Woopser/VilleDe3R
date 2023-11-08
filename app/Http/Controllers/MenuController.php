<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accidentTravail = accidenttravail::all();
        return view ('menus.index', compact('accientTravail'));
    }

    // Renvoit la liste des formulaire
    public function listeForm()
    {
        return view('form.index');
    }
}
