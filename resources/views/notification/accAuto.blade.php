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
            <label for="numImp" class="form-label"><strong>Numéro(s) unité(s) impliqué(s) :</strong></label>
            <p>{{$form->numeroUnite}}</p>
        </div>

        <div class="mb-3">
            <label for="dept" class="form-label"><strong>Département : </strong></label>
           <p>{{$form->departement}}</p>
            </select>
            
        </div>

        <div class="mb-3">
            <label for="nomEmp" class="form-label"> <strong>Matricule de l'employé impliqué :  </strong></label>
            <p>{{$form->matricule}}</p>
        </div>

        <div class="mb-3">
            <label for="numPerm" class="form-label"><strong> Numéro du permis de conduire de l'employé: </strong></label>
            <p>{{$form->numeroDePermis}}</p>
        </div>

        <label for="civil" class="form-label"><strong> Autres véhicules impliqués (citoyen) : </strong></label>
        <p>{{$form->autreVehicule}}</p>
        </div>

        <div class="d-flex justify-content-end">
                <button type="submit" class="BTEnvoyer ">Verifier</button>
        </div>

        </form>
@endforeach


@endif


@endsection