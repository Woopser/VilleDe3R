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
<form method="POST" action="{{route('notification.update',[$notif->id])}}" class="notif-main notif-show">
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