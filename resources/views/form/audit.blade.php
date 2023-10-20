@extends('layouts.app')

@section('V3R')

@section('content')
    


    <h2>Formulaire d'audit SST</h2>

    <form method="POST" >
        @csrf

        <div class="mb-3">
            <label for="numImp" class="form-label">Lieu des travaux :</label>
            <input type="text" class="form-control" id="numUnit" name="lieu">
        </div>

        <div class="mb-3">
            <label for="numImp" class="form-label">Date et heure :</label>
            <input type="datetime-local" class="form-control" id="numUnit" name="date">
        </div>
        <div>
            <span> 
                <span id="spanGauche">      Conforme      </span> <span> Non-Conforme      </span> <span> N/A </span>
            </span>
        </div>
        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                EPI
            </label>
            <input type="radio" name="epi" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="epi" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="epi" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                Tenue des lieux
            </label>
            <input type="radio" name="epi" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="epi" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="epi" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                Comportement sécuritaire
            </label>
            <input type="radio" name="epi" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="epi" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="epi" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                Signalisation
            </label>
            <input type="radio" name="epi" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="epi" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="epi" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                Fiches Signalétiques
            </label>
            <input type="radio" name="epi" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="epi" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="epi" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                Travaux - Excabvation
            </label>
            <input type="radio" name="epi" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="epi" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="epi" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                Espace clos
            </label>
            <input type="radio" name="epi" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="epi" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="epi" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                Méthode de travail
            </label>
            <input type="radio" name="epi" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="epi" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="epi" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                Autre(s) (optionnel)
            </label>
            <input type="radio" name="epi" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="epi" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="epi" value="2" class="form-check-input" id="spanGauche">
        </div>
            
 
        <div class="mb-3">
            <label for="numImp" class="form-label">Autre(s) : Veuillez préciser</label>
            <input type="text" class="form-control" id="numUnit" name="lieu">
        </div>

        <div class="mb-3">
            <label for="numImp" class="form-label">Description:  :</label>
            <textarea name="lieu"> </textarea>
        </div>



    </form>




    
@endsection