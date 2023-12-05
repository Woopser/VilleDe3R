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

    <div class="form-main">
      <h2>Formulaire d'accident automobile</h2>
      <form method="POST" action="{{route('accidentAuto.store')}}" class="form-auto">
          @csrf
          <table>
              <tr>
                  <td colspan="3" class="form-text-input">
                    <input type="text" class="text-input" id="numUnit" name="numeroUnite" placeholder="Numéro(s) unité(s) impliqué(s) (ex. 123, 456 , 765, etc...)">
                  </td>
              </tr>
              <tr>
                  <td colspan="3" class="form-text-input">
                    <select class="text-input" aria-label="Default select example" name="departement">
                      <option selected>Choisir un département...</option>
                      @foreach($departements as $departement)
                        <option value="{{$departement->id}}">{{$departement->nom}}</option>
                      @endforeach
                    </select>
                  </td>
              </tr>
              <tr>
                  <td colspan="3" class="form-text-input">
                    <input type="number" class="text-input" id="nomEmp" name="employeImpliquer" placeholder="Matricule de l'employé impliqué">
                  </td>
              </tr>
              <tr>
                  <td colspan="3" class="form-text-input">
                    <input type="text" class="text-input" id="numPerm" name="numeroDePermis" placeholder="Numéro du permis de conduire de l'employé">
                  </td>
              <tr>
              <tr class="form-check-container mt-3 mb-5">
                <td class="form-label ms-1"><strong>Autres véhicules impliqués (citoyen)</strong></td>
                  <td class="form-check ms-5">
                    <input type="radio" name="autreVehicule" value="1" class="form-check-input" id="OuiAuto">
                    <label for="OuiAuto" class="form-check-label">Oui</label>
                  </td>
                  <td class="form-check ms-5">
                    <input type="radio" name="autreVehicule" checked value="0" class="form-check-input" id="NonAuto">
                    <label for="NonAuto" class="form-check-label">Non</label>
                  </td>
              </tr>
          </table>
          <button class="btn btn-primary form-button" type="submit">Envoyer</button>
      </form>
  </div>

@endsection