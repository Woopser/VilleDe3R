<?php

namespace App\Http\Controllers;

use App\Models\accidenttravail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\FormulaireAccidentTravailRequest;


class FormulaireAccidentTravailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Session::has('matricule')){
            $matricule = Session::get('matricule');//cherche la matricule de l'employer connecter
            //Log::debug(Session::get('matricule')); //test
            $personne = User::where('matricule','=',$matricule)->first();//s'assure qu'il l'a dans la base de donner 
            return view('form/declarationAccident', compact('personne'));//renvoit au formualire a remplir
        }
        else{
            Log::debug(Session::all());
        }   
    }

    /**
     * Store a newly created resource in storage.FormulaireAccidentTravailRequest
     */
    public function store(Request $request)
    {
        //=================================Test=======================================================================================================================================
        $accidentTest = new accidenttravail($request->all()); //Prend toutes les données de la request
        Log::debug($accidentTest); // Log l'interrieur de la variable
        //=================================Store======================================================================================================================================
        $accident = new accidenttravail();
        $accident->matricule = $request->matricule;
        $accident->dateAccident = $request->dateAccident;
        $accident->lieu = $request->lieu;
        $accident->description = $request->description;
        if($request->temoin != null){
            $accident->temoin = $request->temoin;
        }
        $accident->nature = $request->nature;
        $accident->descriptionBlessure = $request->descriptionBlessure;

        //Besoin de faire une vérification pour la violence
        //$accident->violence = $request->violence;
        if($request->violenceV === true){
            if($request->violenceP === true){
                Log::debug("good");
                $accident->violence = "Physique et Verbale";
            }
            else{
                $accident->violence = "Verbale";
            }
        }
        else if($request->violenceP === true){
            $accident->violence = "Verbale";
        }
        

        $accident->comment = $request->comment;
        $accident->nomSecouriste = $request->nomSecouriste;
        $accident->detail = $request->detail;
        
        Log::debug($accident); // Test
    }

    public function update(Request $request, FormulaireAccidentTravail $formulaireAccidentTravail)
    {
        //
    }

    
}
