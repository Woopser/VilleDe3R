@extends('layouts.app')

@section('content')
<div class="container">
    <div style="height: 115px"></div>
    <div>
        <div>
            @if(isset($personne))
            <div class="modalYesNo" id="yesNoModal">
                <div style="height: 115px"></div>
                <div class="modalYesNo-content">
                    <p>Êtes-vous la personne blessée</p>
                    <p>avec ce matricule : {{$personne->matricule}}</p>
                    <p id="matriculeP" style="display: none">{{$personne->matricule}}</p>
                    <div class="d-flex justify-content-center">
                        <button class="buttonYesNo" style="background-color: #4CAF50;" id="yesButton">
                            Oui
                        </button>
                        <button class="buttonYesNo" style="background-color: #f44336;" id="nonButton">
                            Non
                        </button>
                    </div>
                </div>
            </div>
            @else
                <p>bipboup erreur</p>
            @endif
            <form action="">
                @csrf
                    <div class="mb-3">
                        <label for="matricule" class="form-label">Matricule</label>
                        <input type="text" class="form-control" id="inputMatricule" name="matricule">
                    </div>
                    <div class="mb-3">
                        <label for="superviseur" class="form-label">Superviseur</label>
                        <input type="text" class="form-control" name="superviseur">
                    </div>
                <div class="mb-3">
                    <label for="dateAccident" class="form-label">Date de l'accident</label>                   
                    <input type="date-time" class="form-control" name="dateAccident">
                <div class="mb-3">
                    <label for="description" class="form-label">Description de l'accident</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="temoin" class="form-label">Témoin</label>
                    <input type="text" class="form-control" name="temoin">
                </div>
                <div class="mb-3">
                    <label for="nature" class="form-label">Nature</label>
                    <input type="text" class="form-control" name="nature">
                </div>
                <div class="mb-3">
                    <label for="descriptionBlessure" class="form-label">Description Blessure</label>
                    
                </div>
            </form>
        </div>
        <div onload="declarationAccident.js"></div>
    </div>
</div>
@endsection