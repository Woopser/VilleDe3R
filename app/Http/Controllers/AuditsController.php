<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Models\Audit;
use App\Models\notification;

class AuditsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('form/audit');
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
    public function store(AuditRequest $request)
    {
        Log::debug('ICI');

        $audit = new Audit($request->all());
        Log::debug($audit);

        $audit2 = new audit();
        $notification = new notification(); // Créer la variable pour les notifications
        $notification->matriculeEmploye = Session::get('matricule');
        $notification->matriculeSuperviseur = Session::get('superviseur');
        $notification->typeFormulaire = "Audit";

        // je met un id au hasard pour tester, va devoir le faire automatiquement apres
        $notification->idFormulaire = 7;

        //Epi
        $audit2->EPI = $audit->EPI;

        //tenueLieux
        $audit2->tenueLieux = $audit->tenueLieux;

        //comportement 
        $audit2->comportement = $audit->comportement;

        //signalisation
        $audit2->signalisation = $audit->signalisation;

        //ficheSignalietique
        $audit2->ficheSignaletique = $audit->ficheSignaletique;

        //travaux
        $audit2->travaux = $audit->travaux;

        //espaceClos
        $audit2->espaceClos = $audit->espaceClos;

        //methode
        $audit2->methode = $audit->methode;

        //autres
        $audit2->autres = $audit->autres;

        //distantiation
        $audit2->distanciation = $audit->distanciation;

        //portMasque
        $audit2->portMasque = $audit->portMasque;

        //respectProcedure
        $audit2->respectProcedure = $audit->respectProcedure;

        //matricule 
        $audit2->matricule = Session::get('matricule');

        //Superviseur
        $audit2->superviseur = Session::get('superviseur');  

        //description travail
        $audit2->descriptionTravail  = $audit->descriptionTravail;

        //lieu
        $audit2->lieu = $audit->lieu;

        //date et heure
        $audit2->date = $audit->date;

        //Description Autres
        $audit2->descAutre = $audit->descAutre;

        $audit2->save();
        $notification->save();
        
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
