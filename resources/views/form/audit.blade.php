@extends('layouts.app')

@section('V3R')

@section('content')
    <script src=""></script>
    

    @if(isset($errors) && $errors->any())

        <div class="alert alert-danger">

            @foreach($errors->all() as $error)

                <p>{{$error}}</p>

            @endforeach

        </div>
    @endif

    <h2>Formulaire d'audit SST</h2>

    <form method="POST" action="{{route('audit.store')}}">
        @csrf

        <div class="mb-3">
            <label for="numImp" class="form-label"> <strong> Travaux des travaux : </strong></label>
            <input type="text" class="form-control" id="numUnit" name="lieu">
        </div>

        <div class="mb-3">
            <label for="numImp" class="form-label"> <strong> Date et heure : </strong></label>
            <input type="datetime-local" class="form-control" id="numUnit" name="date">
        </div>
        <div>
            <span> 
                <span id="spanGauche">      Conforme      </span> <span> Non-Conforme      </span> <span> N/A </span>
            </span>
        </div>
        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                EPI
                </strong>
            </label>
            <input type="radio" name="EPI" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="EPI" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="EPI" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Tenue des lieux
                </strong>
            </label>
            <input type="radio" name="tenueLieux" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="tenueLieux" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="tenueLieux" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Comportement sécuritaire
                </strong>
            </label>
            <input type="radio" name="comportement" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="comportement" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="comportement" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Signalisation
                </strong>
            </label>
            <input type="radio" name="signalisation" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="signalisation" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="signalisation" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Fiches Signalétiques
                </strong>
            </label>
            <input type="radio" name="ficheSignaletique" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="ficheSignaletique" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="ficheSignaletique" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Travaux - Excabvation
                </strong>
            </label>
            <input type="radio" name="travaux" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="travaux" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="travaux" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Espace clos
                </strong>
            </label>
            <input type="radio" name="espaceClos" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="espaceClos" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="espaceClos" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Méthode de travail
                </strong>
            </label>
            <input type="radio" name="methode" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="methode" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="methode" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Autre(s) (optionnel)
                </strong>
            </label>
            <input type="radio" name="autres" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="autres" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="autres" value="2" class="form-check-input" id="spanGauche">
        </div>
            
 
        <div class="mb-3">
            <strong>
            <label for="numImp" class="form-label">Autre(s) : Veuillez préciser</label>
            </strong>
            <input type="text" class="form-control" name="descAutre">
        </div>


        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Distanciation Social
                </strong>
            </label>
            <input type="radio" name="distanciation" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="distanciation" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="distanciation" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Port des  EPI (masques/visières)
                </strong>
            </label>
            <input type="radio" name="portMasque" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="portMasque" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="portMasque" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Respect des procédures établis 
                </strong>
            </label>
            <input type="radio" name="respectProcedure" value="0" class="form-check-input" id="spanGauche">

            <input type="radio" name="respectProcedure" value="1" class="form-check-input" id="spanGauche">
    
            <input type="radio" name="respectProcedure" value="2" class="form-check-input" id="spanGauche">
        </div>

        <div class="mb-3">
            <strong>
            <label for="numImp" class="form-label">Description:  :</label>
            </strong>
            <input name="descriptionTravail" type="text">
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>


    </form>




    
@endsection