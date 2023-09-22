@extends('layouts.app')

@section('content')
<div class="container">
    <div style="height: 115px"></div>
    <div>
        <div>
            <div class="modalYesNo" id="yesNoModal">
                <div style="height: 115px"></div>
                <div class="modalYesNo-content">
                    <p>Êtes-vous la personne blessée</p>
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
            <form action="">
                @csrf
                <div class="mb-3">
                    <label for="matricule" class="form-label">Matricule</label>
                    <input type="text" class="form-control" id="inputMatricule" name="matricule">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"></label>
                </div>
                <!--
                <label class="form-label d-flex justify-content-center">Es se que vous êtes la personne blesser ?</label>
                <div class="d-flex justify-content-center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radioButton" id="radioOui">
                        <label class="form-check-label">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radioButton" id="radioNon">
                        <label class="form-check-label">Non</label>
                    </div>
                </div>
                 div d'ajout par javascript 
                <div id="ajoutJava" ></div>
                -->
                
            </form>
        </div>
        <div onload="declarationAccident.js"></div>
    </div>
</div>
@endsection