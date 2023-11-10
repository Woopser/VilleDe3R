@extends('layouts.app')

@section('V3R')

@section('content')
<div>


<div style="height: 100.05px"></div>
@if(isset($errors) && $errors->any())

     <div class="alert alert-danger">

         @foreach($errors->all() as $error)

             <p>{{$error}}</p>

        @endforeach

    </div>
@endif

<h1>Formulaire de signalement de situation dangeureuse</h1>

<form method="POST" action="{{route('situationDang.store')}}">
    @csrf

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Fonction au moment de l'evenement:  </strong></label>
        <input type="text" class="form-control" id="nomEmp" name="fonction">
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Secteur d'activité :  </strong></label>
        <input type="text" class="form-control" id="nomEmp" name="secteur">
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Date de l'observation :  </strong></label>
        <input type="datetime-local" class="form-control" id="nomEmp" name="dateObservation">
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Témoin(s) :  </strong></label>
        <input type="text" class="form-control" id="nomEmp" name="temoin">
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Lieu :  </strong></label>
        <input type="text" class="form-control" id="nomEmp" name="lieu">
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Description :  </strong></label>
        <textarea name="description" class="form-control" id="description"></textarea>
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Correction :  </strong></label>
        <textarea name="correction" class="form-control" id="description"></textarea>
    </div>


    <div class="col-12">
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
<div style="height: 100.05px"></div>
</form>
</div>
@endsection