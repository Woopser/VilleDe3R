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
        Log::debug($request->detail); // Log la value de detail
        //=================================Store======================================================================================================================================
        $accident = new accidenttravail(); // Créer une nouvelle variable
        // Met toute les données utiles
        $accident->matricule = $request->matricule; 
        $accident->dateAccident = $request->dateAccident;
        $accident->lieu = $request->lieu;
        $accident->description = $request->description;
        if($request->temoin != null){ // Vérification de témoin pour savoir si il y en a ou non
            $accident->temoin = $request->temoin;
        }
        else{
            $accident->temoin = null;
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
        $accident->premiersoin = $request->premierSoin;
        $accident->nomSecouriste = $request->nomSecouriste;
        // Vérification pour details parce que s,est des données pré enregistrer
        if($request->detail == 1){ // Assigne la value si la valeur retourner est 1
            $accident->detail = "Accident ne nécessitant aucune absence";
        }
        else if($request->detail == 2){ // Assigne la value si la valeur retourner est 2
            $accident->detail = "Accident nécessitant une consultation médicale";
        }
        else{
            Log::debug("erreur pour les details");
        }
        //===================================================== Test ============================================================================================
        Log::debug($accident); // Test tout
        Log::debug($accident->detail); // test detail
    }

    public function update(Request $request, FormulaireAccidentTravail $formulaireAccidentTravail)
    {
        //
    }

    
}
