@extends('layouts.app')

@section('V3R')

<div>
@section('content')
    <div style="height: 100.05px"></div>


    @if(isset($errors) && $errors->any())

     <div class="alert alert-danger">

         @foreach($errors->all() as $error)

             <p>{{$error}}</p>

        @endforeach

    </div>
@endif

    <h2>Formulaire de déclaration d'accident de voitures</h2>
    <form method="POST" action="{{route('accidentAuto.store')}}">
      @csrf
        <div class="mb-3">
            <label for="numImp" class="form-label"><strong>Numéro unité impliqué :</strong></label>
            <input type="text" class="form-control" id="numUnit" name="numeroUnite">
            <p id="erreurUnit" class="erreurForm"></p>
        </div>

        <div class="mb-3">
            <label for="dept" class="form-label"><strong>Département : </strong></label>
            <select class="form-select" aria-label="Default select example" name="departement">
              @foreach($departements as $departement)
                <option value="{{$departement->id}}">{{$departement->nom}}</option>
              @endforeach
            </select>
            
        </div>

        <div class="mb-3">
            <label for="nomEmp" class="form-label"> <strong>Matricule de l'employé impliqué :  </strong></label>
            <input type="number" class="form-control" id="Matri" name="employeImpliquer">
            <p id="erreurMarti" class="erreurForm"></p>
        </div>

        <div class="mb-3">
            <label for="numPerm" class="form-label"><strong> Numéro du permis de conduire de l'employé: </strong></label>
            <input type="text" class="form-control" id="numPerm" name="numeroDePermis">
        </div>

        <label for="civil" class="form-label"><strong> Autres véhicules impliqués (citoyen) : </strong></label>
        <div class="form-check">
          <input class="form-check-input" type="radio"  id="flexRadioDefault1" name="autreVehicule" value="1">
          <label class="form-check-label" for="flexRadioDefault1" >
            Oui
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio"  id="flexRadioDefault2" checked  name="autreVehicule" value="0">
          <label class="form-check-label" for="flexRadioDefault2" >
            Non
          </label>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>

    </form>
    <script src="{{ asset('js/accidentVoiture.js') }}"></script>
    <div style="height: 115px"></div>
</div>
@endsection