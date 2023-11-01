<?php

namespace App\Http\Controllers;

use App\Models\accidenttravail;
use App\Models\notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\FormulaireAccidentTravailRequest;
use Carbon\Carbon;

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
    public function store(FormulaireAccidentTravailRequest $request)
    {
        //=================================Test=======================================================================================================================================
        //$accidentTest = new accidenttravail($request->all()); //Prend toutes les données de la request
        //Log::debug($accidentTest); // Log l'interrieur de la variable
        //Log::debug($request->detail); // Log la value de detail
        //=================================Store======================================================================================================================================
        try{
            $accident = new accidenttravail(); // Créer une nouvelle variable
            $notification = new notification(); // Créer la variable pour les notifications
        // Met toute les données utiles
        if(Session::has('matricule')){ // Prend la variable de session matricule pour prendre la matricule de l'employer
        $accident->matricule = Session::get('matricule'); 
        $notification->matriculeEmploye = Session::get('matricule');
        }
        if(Session::has('superviseur')){ // Prend la variable de session superviseur pour prendre le superviseur de l'employer
            $accident->superviseur = Session::get('superviseur');
            $notification->matriculeSuperviseur = Session::get('superviseur');
        }
        //$accident->dateAccident = date('yyyy-MM-dd HH:mm:ss',$request->dateAccident);
        $dt = carbon::create($request->dateAccident); // Met la date de l'accident dedans le bon format -> yyyy-MM-dd HH:mm:ss
        //Log::debug($dt); // Test
        $accident->dateAccident = $dt; // met la date dans la variable à cette effet
        $accident->lieu = $request->lieu;
        $accident->description = $request->description;
        if($request->temoin != null){ // Vérification de témoin pour savoir si il y en a ou non
            $accident->temoin = $request->temoin;
        }
        else{ // Si il n'y en a pas attribut rien à la variable
            $accident->temoin = null;
        }
        $accident->nature = $request->nature;
        $accident->descriptionBlessure = $request->descriptionBlessure;
        //Besoin de faire une vérification pour la violence
        //$accident->violence = $request->violence;
        if($request->violenceV == "Verbale"){ // Vérifi si la coche violence est cocher
            if($request->violenceP == "Physique"){ // Si elle est cocher regarde maintenant si la coche physique est cocher
                $accident->violence = "Physique et Verbale";  // Attribut donc les deux reponse physique et verbale à violence
            }
            else{ //Aussi non si physique est pas cocher retourne seulement Verbale
                $accident->violence = "Verbale"; // N'attribut pas verbale a violence. Attribut seulement physique à violence
            }
        }
        else if($request->violenceP === "Physique"){ // La coche Verbale n'a pas été cocher alors il regarde si la coche physique est cocher seul
            $accident->violence = "Verbale"; // Si oui attribut Verbale tout seul a violence
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
            //return redirect()->route('menus.index');
        }
        $accident->DateRempli = Carbon::now(); // Prend la date du moment où il a été remplit
        //===================================================== Test ============================================================================================
        //Log::debug($accident); // Test tout
        //Log::debug($accident->detail); // Test detail
        //================================================== Sauvegarde =========================================================================================
        $accident->save(); // Sauvegarde dedans la BD
        
        //==================================================Notification=========================================================================================
        $notification->typeFormulaire = 3;
        // je met un id au hasard pour tester, va devoir le faire automatiquement apres
        $notification->idFormulaire = 7;
        Log::debug($notification);
        $notification->save();

        //=======================================================================================================================================================
        }
        catch(\Throwable $e){
            //Il y a une erreur 
            Log::debug($e);
            return redirect()->route('menus.index');  // retourne quand même au menu
        }
        return redirect()->route('menus.index'); // retourne au menu si cela ce passe comme prévu ou non
    }

    public function update(Request $request, FormulaireAccidentTravailRequest $formulaireAccidentTravail)
    {
        //
    }

    
}
