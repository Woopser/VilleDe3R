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
    public function show(Notification $not)
    {   
        
        $notifs = notification::all();
        $accTravails = accidenttravail::all();


        return View('/notification.show', compact('notifs','accTravails',));
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
