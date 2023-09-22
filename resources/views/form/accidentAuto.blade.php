@extends('layouts.app')

@section('V3R')

@section('content')
    <div style="height: 100.05px"></div>


    <form method="POST" action="{{route('accidentAuto.store')}}">
      @csrf
        <div class="mb-3">
            <label for="numImp" class="form-label">Numéro(s) unité(s) impliqué(s) :</label>
            <input type="text" class="form-control" id="numUnit" name="numUnit">
            <div id="numUnite" class="form-text">123, 456 , 765, etc...</div>
        </div>

        <div class="mb-3">
            <label for="dept" class="form-label">Département :</label>
            <input type="text" class="form-control" id="dept" name="dept">
        </div>

        <div class="mb-3">
            <label for="nomEmp" class="form-label">Prénom et nom de l'employé impliqué :</label>
            <input type="text" class="form-control" id="nomEmp" name="nomEmp">
        </div>

        <div class="mb-3">
            <label for="numPerm" class="form-label">Numéro du permis de conduire de l'employé: </label>
            <input type="text" class="form-control" id="numPerm" name="numPerm">
        </div>

        <label for="civil" class="form-label"> Autres véhicules impliqués (citoyen) :</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" name="numUnit" value="1">
          <label class="form-check-label" for="flexRadioDefault1" >
            Oui
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked  name="numUnit" value="0">
          <label class="form-check-label" for="flexRadioDefault2" >
            Non
          </label>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>

    </form>

@endsection