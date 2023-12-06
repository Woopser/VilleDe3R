@extends('layouts.app')

@section('V3R')

@section('content')


@if(isset($errors) && $errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif

@if(isset($forms))


@foreach($forms as $form)
<form method="POST" action="{{route('notification.update', [$notif->id])}}" class="notif-main notif-show">
@csrf
<div class="mb-3">
            <label for="numImp" class="form-label"> <strong> Travaux des travaux : </strong></label>
            @if($form->lieu == 0)
            <p>Conforme</p>
            @elseif($form->lieu == 1)
            <p>Non-Conforme</p>
            @elseif($form->lieu == 2)
            <p>N/A</p>
            @endif
        </div>

        <div class="mb-3">
            <label for="numImp" class="form-label"> <strong> Date et heure : </strong></label>
            @if($form->date == 0)
            <p>Conforme</p>
            @elseif($form->date == 1)
            <p>Non-Conforme</p>
            @elseif($form->date == 2)
            <p>N/A</p>
            @endif
        </div>
      
        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                EPI
                </strong>
                @if($form->EPI == 0)
            <p>Conforme</p>
            @elseif($form->EPI == 1)
            <p>Non-Conforme</p>
            @elseif($form->EPI == 2)
            <p>N/A</p>
            @endif
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Tenue des lieux
                </strong>
            </label>
            @if($form->tenueLieux == 0)
            <p>Conforme</p>
            @elseif($form->tenueLieux == 1)
            <p>Non-Conforme</p>
            @elseif($form->tenueLieux == 2)
            <p>N/A</p>
            @endif
             </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Comportement sécuritaire
                </strong>
            </label>
            @if($form->comportement == 0)
            <p>Conforme</p>
            @elseif($form->comportement == 1)
            <p>Non-Conforme</p>
            @elseif($form->comportement == 2)
            <p>N/A</p>
            @endif
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Signalisation
                </strong>
            </label>
            @if($form->signalisation == 0)
            <p>Conforme</p>
            @elseif($form->signalisation == 1)
            <p>Non-Conforme</p>
            @elseif($form->signalisation == 2)
            <p>N/A</p>
            @endif
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Fiches Signalétiques
                </strong>
            </label>
            @if($form->ficheSignaletique == 0)
            <p>Conforme</p>
            @elseif($form->ficheSignaletique == 1)
            <p>Non-Conforme</p>
            @elseif($form->ficheSignaletique == 2)
            <p>N/A</p>
            @endif
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Travaux - Excabvation
                </strong>
            </label>
            @if($form->travaux == 0)
            <p>Conforme</p>
            @elseif($form->travaux == 1)
            <p>Non-Conforme</p>
            @elseif($form->travaux == 2)
            <p>N/A</p>
            @endif
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Espace clos
                </strong>
            </label>
            @if($form->espaceClos == 0)
            <p>Conforme</p>
            @elseif($form->espaceClos == 1)
            <p>Non-Conforme</p>
            @elseif($form->espaceClos == 2)
            <p>N/A</p>
            @endif
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Méthode de travail
                </strong>
            </label>
            @if($form->methode == 0)
            <p>Conforme</p>
            @elseif($form->mehode == 1)
            <p>Non-Conforme</p>
            @elseif($form->methode == 2)
            <p>N/A</p>
            @endif
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Autre(s) (optionnel)
                </strong>
            </label>
            @if($form->autres == 0)
            <p>Conforme</p>
            @elseif($form->autres == 1)
            <p>Non-Conforme</p>
            @elseif($form->autres == 2)
            <p>N/A</p>
            @endif
            </div>
            
 
        <div class="mb-3">
            <strong>
            <label for="numImp" class="form-label">Autre(s) : Veuillez préciser</label>
            </strong>
            @if($form->descAutre == 0)
            <p>Conforme</p>
            @elseif($form->descAutre == 1)
            <p>Non-Conforme</p>
            @elseif($form->descAutre == 2)
            <p>N/A</p>
            @endif
        </div>


        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Distanciation Social
                </strong>
            </label>
            @if($form->distanciation == 0)
            <p>Conforme</p>
            @elseif($form->distanciation == 1)
            <p>Non-Conforme</p>
            @elseif($form->distanciation == 2)
            <p>N/A</p>
            @endif
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Port des  EPI (masques/visières)
                </strong>
            </label>
            @if($form->portMasque == 0)
            <p>Conforme</p>
            @elseif($form->portMasque == 1)
            <p>Non-Conforme</p>
            @elseif($form->portMasque == 2)
            <p>N/A</p>
            @endif
            </div>

        <div>
            <label class="form-check-label" for="flexRadioDefault2" >
                <strong>
                Respect des procédures établis 
                </strong>
            </label>
            @if($form->respectProcedure == 0)
            <p>Conforme</p>
            @elseif($form->respectProcedure == 1)
            <p>Non-Conforme</p>
            @elseif($form->respectProcedure == 2)
            <p>N/A</p>
            @endif
            </div>

        <div class="mb-3">
            <strong>
            <label for="numImp" class="form-label">Description:  :</label>
            </strong>
            @if($form->descriptionTravail == 0)
            <p>Conforme</p>
            @elseif($form->descriptionTravail == 1)
            <p>Non-Conforme</p>
            @elseif($form->descriptionTravail == 2)
            <p>N/A</p>
            @endif
        </div>

        @if($notif->verifier == 0)
            <div class="d-flex justify-content-end">
                <button type="submit" class="BTEnvoyer ">Verifier</button>
            </div>
        @endif
        @if(Session::get('role') == "admin" && $notif->verifierAdmin == 0)
                <div class="d-flex justify-content-end">
                    <button type="submit" class="BTEnvoyer ">Verifier</button>
                </div> 
            @endif
</form>
@endforeach
@endif
@endsection