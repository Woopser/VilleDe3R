<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Models\Audit;

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
    public function store(Request $request)
    {
        Log::debug('ICI');

        $audit = new Audit($request->all());
        Log::debug($audit);

        $audit2 = new audit();

        //EPI
        if($audit->EPI = 0)
        {
            $audit2->EPI = "Conforme";
        }
        elseif($audit->EPI = 1){
            $audit2->EPI = "Non-Conforme";
        }
        elseif($audit->EPI  = 2 ){
            $audit2->EPI = "N/A";
        }

        //Tenue des lieux
        if($audit->tenueLieux = 0)
        {
            $audit2->tenueLieux = "Conforme";
        }
        elseif($audit->tenueLieux = 1){
            $audit2->tenueLieux = "Non-Conforme";
        }
        elseif($audit->tenueLieux  = 2 ){
            $audit2->tenueLieux = "N/A";
        }

        //comportement
        if($audit->comportement = 0)
        {
            $audit2->comportement = "Conforme";
        }
        elseif($audit->comportement = 1){
            $audit2->comportement = "Non-Conforme";
        }
        elseif($audit->comportement  = 2 ){
            $audit2->comportement = "N/A";
        }

        //signalissation
        if($audit->signalisation = 0)
        {
            $audit2->signalisation = "Conforme";
        }
        elseif($audit->signalisation = 1){
            $audit2->signalisation = "Non-Conforme";
        }
        elseif($audit->signalisation  = 2 ){
            $audit2->signalisation = "N/A";
        }

        //ficheSignaletique
        if($audit->ficheSignaletique = 0)
        {
            $audit2->ficheSignaletique = "Conforme";
        }
        elseif($audit->ficheSignaletique = 1){
            $audit2->ficheSignaletique = "Non-Conforme";
        }
        elseif($audit->ficheSignaletique  = 2 ){
            $audit2->ficheSignaletique = "N/A";
        }

        //travaux
        if($audit->travaux = 0)
        {
            $audit2->travaux = "Conforme";
        }
        elseif($audit->travaux = 1){
            $audit2->travaux = "Non-Conforme";
        }
        elseif($audit->travaux  = 2 ){
            $audit2->travaux = "N/A";
        }

        //espaceClos
        if($audit->espaceClos = 0)
        {
            $audit2->espaceClos = "Conforme";
        }
        elseif($audit->espaceClos = 1){
            $audit2->espaceClos = "Non-Conforme";
        }
        elseif($audit->espaceClos  = 2 ){
            $audit2->espaceClos = "N/A";
        }

        //methode
        if($audit->methode = 0)
        {
            $audit2->methode = "Conforme";
        }
        elseif($audit->methode = 1){
            $audit2->methode = "Non-Conforme";
        }
        elseif($audit->methode  = 2 ){
            $audit2->methode = "N/A";
        }

        //autres
        if($audit->autres = 0)
        {
            $audit2->autres = "Conforme";
        }
        elseif($audit->autres = 1){
            $audit2->autres = "Non-Conforme";
        }
        elseif($audit->autres  = 2 ){
            $audit2->autres = "N/A";
        }

        //distanciation
        if($audit->distanciation = 0)
        {
            $audit2->distanciation = "Conforme";
        }
        elseif($audit->distanciation = 1){
            $audit2->distanciation = "Non-Conforme";
        }
        elseif($audit->distanciation  = 2 ){
            $audit2->distanciation = "N/A";
        }

        //portMasque
        if($audit->portMasque = 0)
        {
            $audit2->portMasque = "Conforme";
        }
        elseif($audit->portMasque = 1){
            $audit2->portMasque = "Non-Conforme";
        }
        elseif($audit->portMasque  = 2 ){
            $audit2->portMasque = "N/A";
        }

        //respectProcedure
        if($audit->respectProcedure = 0)
        {
            $audit2->respectProcedure = "Conforme";
        }
        elseif($audit->respectProcedure = 1){
            $audit2->respectProcedure = "Non-Conforme";
        }
        elseif($audit->respectProcedure  = 2 ){
            $audit2->respectProcedure = "N/A";
        }

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
