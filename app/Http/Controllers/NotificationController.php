<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accidentauto;
use App\Models\accidenttravail;
use App\Models\notification;
use App\Models\Situation;
use App\Models\Audit;
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
        $users = User::all();

        if($notifs)
        foreach($notifs as $notif)
        $users = User::where('matricule',$notif->matriculeEmploye)->get();

        return View('/notification.index', compact('notifs','users'));
    }

    public function indexAdmin()
    {
        $notifs = notification::where('verifier',true)->get();
        $users = User::all();

        if($notifs)
        foreach($notifs as $notif)
        $users = User::where('matricule',$notif->matriculeEmploye)->get();
        
        return View('/notification.indexAdmin', compact('notifs','users'));
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

       
    }

    public function accTravail(string $id)
    {
        try{
        $notif = notification::find($id);

        $forms = accidenttravail::where('id',$notif->idFormulaire)->get();

        return View('/notification.accTravail', compact('forms','notif'));
           
        }
        catch(\Throwable $e){
        Log::debug($e);
        }

        
    }

    public function accAuto(string $id)
    {
        try{
            $notif = notification::find($id);

            $forms = accidentauto::where('id',$notif->idFormulaire)->get();
    
            return View('/notification.accAuto', compact('forms','notif')); 
        } 
        catch(\Throwable $e){
            Log::debug($e);
        }
         
    }

    public function audit(string $id)
    {

        try{
            $notif = notification::find($id);

            $forms = Audit::where('id',$notif->idFormulaire)->get();
    
            return View('/notification.audit', compact('forms','notif')); 
        }
        catch(\Throwable $e){
            Log::debug($e);
        }
        
    }

    public function situation(string $id)
    {

        try{
            $notif = notification::find($id);
      
            $forms = Situation::where('id',$notif->idFormulaire)->get();
    
            return View('/notification.situation', compact('forms','notif')); 
        }
        catch(\Throwable $e){
            Log::debug($e);
        }
        
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
    public function update(string $id)
    {
        $notif = notification::find($id);

        if(Session::get('role') == 'superieur'){
            $notif->verifier = 1;
            $notif->save();
            return redirect()->route('notification.index');
        }
        elseif(Session::get('role') == 'admin'){
            $notif->verifierAdmin = 1;
            $notif->save();
            return redirect()->route('notification.indexAdmin');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
