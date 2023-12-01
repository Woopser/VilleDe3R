@extends('layouts.app')

@section('V3R')

@section('content')
    <div style="height: 144.89px"></div>


    @if(isset($errors) && $errors->any())

     <div class="alert alert-danger">

         @foreach($errors->all() as $error)

             <p>{{$error}}</p>

        @endforeach

    </div>
@endif

@if(isset($forms))


@foreach($forms as $form)

<div class="mb-3">
<form method="POST" action="{{route('notification.update', [$notif->id])}}">
    @csrf
            <label for="numImp" class="form-label"> <strong> Travaux des travaux : </strong></label>
            <p>{{$form->lieu}}</p>
        </div>

        <div class="mb-3">
            <label for="numImp" class="form-label"> <strong> Date et heure : </strong></label>
            <p>{{$form->date}}</p>
        </div>
      
        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                EPI
                </strong>
                <p>{{$form->EPI}}</p>
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Tenue des lieux
                </strong>
            </label>
            <p>{{$form->tenueLieux}}</p>
             </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Comportement sécuritaire
                </strong>
            </label>
            <p>{{$form->comportement}}</p>
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Signalisation
                </strong>
            </label>
            <p>{{$form->signalisation}}</p>
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Fiches Signalétiques
                </strong>
            </label>
            <p>{{$form->ficheSignaletique}}</p>
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Travaux - Excabvation
                </strong>
            </label>
            <p>{{$form->travaux}}</p>
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Espace clos
                </strong>
            </label>
            <p>{{$form->espaceClos}}</p>
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Méthode de travail
                </strong>
            </label>
            <p>{{$form->methode}}</p>
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Autre(s) (optionnel)
                </strong>
            </label>
            <p>{{$form->autres}}</p>
            </div>
            
 
        <div class="mb-3">
            <strong>
            <label for="numImp" class="form-label">Autre(s) : Veuillez préciser</label>
            </strong>
            <p>{{$form->descAutre}}</p>
        </div>


        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Distanciation Social
                </strong>
            </label>
            <p>{{$form->distanciation}}</p>
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Port des  EPI (masques/visières)
                </strong>
            </label>
            <p>{{$form->portMasque}}</p>
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Respect des procédures établis 
                </strong>
            </label>
            <p>{{$form->respectProcedure}}</p>
            </div>

        <div class="mb-3">
            <strong>
            <label for="numImp" class="form-label">Description:  :</label>
            </strong>
            <p>{{$form->descriptionTravail}}</p>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="BTEnvoyer ">Verifier</button>
        </div>
</form>
@endforeach


@endif


@endsection