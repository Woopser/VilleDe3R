<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    use Auth;
    
    public function login(Request $request)
    {
        $reussi = Auth::attempt(['matricule' => $request->matricule, 'password' => $request->password]);

        if($reussi){
            return View('Menus.accueil');
        } else {
            return redirect()->route('connexion');
        }
    }

}
