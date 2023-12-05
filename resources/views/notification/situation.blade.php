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


<h1>Formulaire de signalement de situation dangeureuse</h1>

<form method="POST" action="{{route('notification.update',[$notif->id])}}">
    @csrf

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Fonction au moment de l'evenement:  </strong></label>
        <p>{{$form->fonction}}</p>
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Secteur d'activité :  </strong></label>
        <p>{{$form->secteur}}</p>
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Date de l'observation :  </strong></label>
        <p>{{$form->dateObservation}}</p>
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Témoin(s) :  </strong></label>
        <p>{{$form->temoin}}</p>
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Lieu :  </strong></label>
        <p>{{$form->lieu}}</p>
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Description :  </strong></label>
        <p>{{$form->description}}</p>
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Correction :  </strong></label>
        <p>{{$form->correction}}</p>
    </div>

    @if($notif->verifier == 0){
            <div class="d-flex justify-content-end">
                <button type="submit" class="BTEnvoyer ">Verifier</button>
        </div>
        }
        @endif
</form>
@endforeach


@endif


@endsection