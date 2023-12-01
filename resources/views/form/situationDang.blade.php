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
        <input type="text" class="form-control" id="fonct" name="fonction">
        <p id="erreurFonction" class="erreurForm"></p>
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Secteur d'activité :  </strong></label>
        <input type="text" class="form-control" id="secteur" name="secteur">
        <p id="erreurSecte" class="erreurForm"></p>
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Date de l'observation :  </strong></label>
        <input type="datetime-local" class="form-control" id="dateSit" name="dateObservation">
        <p id="erreurDateSit" class="erreurForm"></p>
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Témoin(s) :  </strong></label>
        <input type="text" class="form-control" id="Temoin" name="temoin">
        <p id="erreurDateTem" class="erreurForm"></p>
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Lieu :  </strong></label>
        <input type="text" class="form-control" id="Lieu" name="lieu">
        <p id="erreurLieu" class="erreurForm"></p>
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Description :  </strong></label>
        <textarea name="description" class="form-control" id="description"></textarea>
        <p id="erreurDesc" class="erreurForm"></p>
    </div>

    <div class="mb-3">
        <label for="nomEmp" class="form-label"> <strong>Correction :  </strong></label>
        <textarea name="correction" class="form-control" id="correction"></textarea>
        <p id="erreurCorr" class="erreurForm"></p>
    </div>


    <div class="col-12">
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
<div style="height: 100.05px"></div>
<script src="{{ asset('js/situationDang.js') }}"></script>
</form>
</div>
@endsection