<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

    return view ('users.index',compact('users'));
    }

    public function login(Request $request)
    {
            //Credentials
            $con = Auth::attempt([
                'matricule' => $request->matricule,
                'password' => $request->password
            ]); 

            $request->validate([
                'matricule'=>'required',           
                'password'=>'required',
            ]);

           // Authentification
           if($con)
           {
                Log::debug("allo");
                //$request->session()->regenerate();
                $user = User::where('matricule', $request->matricule)->first();

                Log::debug($user->matricule);
                Session::put('matricule', $request->matricule);
                if($user->superviseur != null){
                    Session::put('superviseur', $user->superviseur);
                }
                Log::debug(Session::get('matricule'));
                Log::debug(Session::get('superviseur'));
                Session::put('matricule', $request->matricule);
                Session::put('nom',$user->nom);
                Session::put('prenom',$user->prenom);
                Session::put('email',$user->email);
                Session::put('departement',$user->departement);
                Session::put('superviseur',$user->superviseur);
                Session::put('role',$user->role);
                return redirect('/accueil');
           } 
           else
           {
                return redirect()->back()->with('alert','bad dev');
           }
    }

    public function logout()
    {
        Log::debug("NOOOOO");
        Auth::logout();
        Session::flush();
        return redirect()->route('users.index')->with('message','Deconnexion réussi');
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
