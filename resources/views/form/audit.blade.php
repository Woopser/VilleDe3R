@extends('layouts.app')
@section('V3R')
@section('content')
    <div class="form-main">

        @if(isset($errors) && $errors->any())

     <div class="alert alert-danger">

         @foreach($errors->all() as $error)

             <p>{{$error}}</p>

        @endforeach

        @endif
        <h2>Formulaire d'audit SST</h2>
        <form method="POST" action="{{route('audit.store')}}">
            @csrf
            <table>
                <tr>
                    <td colspan="3" class="form-text-input"><input type="text" name="lieu" class="text-input" placeholder="Lieu des travaux"></td>
                </tr>
                <tr  id="erreurLieu" class="erreurForm"></tr>
                <tr>
                    <td colspan="3" class="form-text-input"><input type="datetime-local" name="date" class="text-input"></td>
                </tr>
                <tr class="flexed">
                    <th class="table-radio-4"></th>
                    <th class="table-header ms-3"><i class="fa-solid fa-check" style="color: #04ff00"></i></th>
                    <th class="table-header ms-3"><i class="fa-solid fa-x" style="color: #ff0000;"></i></th>
                    <th>N/A</th>
                </tr>
                <tr class="flexed">
                    <td class="table-radio-4">EPI</th>
                    <td><input type="radio" name="EPI" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="EPI" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="EPI" value="2" class="form-check-input"></td>
                </tr>
                <tr class="flexed">
                    <td class="table-radio-4">Tenue des lieux</th>
                    <td><input type="radio" name="tenueLieux" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="tenueLieux" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="tenueLieux" value="2" class="form-check-input"></td>
                </tr>
                <tr class="flexed">
                    <td class="table-radio-4">Comportement sécuritaire</th>
                    <td><input type="radio" name="comportement" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="comportement" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="comportement" value="2" class="form-check-input"></td>
                </tr>
                <tr class="flexed">
                    <td class="table-radio-4">Signalisation</td>
                    <td><input type="radio" name="signalisation" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="signalisation" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="signalisation" value="2" class="form-check-input"></td>
                </tr>
                <tr class="flexed">
                    <td class="table-radio-4">Fiches Signalétiques</td>
                    <td><input type="radio" name="ficheSignaletique" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="ficheSignaletique" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="ficheSignaletique" value="2" class="form-check-input"></td>
                </tr>
                <tr class="flexed">
                    <td class="table-radio-4">Travaux - Excavation</td>
                    <td><input type="radio" name="travaux" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="travaux" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="travaux" value="2" class="form-check-input"></td>
                </tr>
                <tr class="flexed">
                    <td class="table-radio-4">Espace clos</td>
                    <td><input type="radio" name="espaceClos" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="espaceClos" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="espaceClos" value="2" class="form-check-input"></td>
                </tr>
                <tr class="flexed">
                    <td class="table-radio-4">Méthode de travail</td>
                    <td><input type="radio" name="methode" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="methode" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="methode" value="2" class="form-check-input"></td>
                </tr>
                <tr class="flexed">
                    <td class="table-radio-4">Autres (optionnel)</td>
                    <td><input type="radio" name="autres" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="autres" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="autres" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    <td colspan="3" class="form-text-input"><input type="text" class="text-input" placeholder="Veuillez préciser" name="descAutre"></td>
                </tr>
                <tr class="flexed">
                    <td class="table-radio-4">Distanciation Sociale</td>
                    <td><input type="radio" name="distanciation" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="distanciation" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="distanciation" value="2" class="form-check-input"></td>
                </tr>
                <tr class="flexed">
                    <td class="table-radio-4">Port des EPI (masques/visières)</td>
                    <td><input type="radio" name="portMasque" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="portMasque" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="portMasque" value="2" class="form-check-input"></td>
                </tr>
                <tr class="flexed">
                    <td class="table-radio-4">Respect des procédures établis</td>
                    <td><input type="radio" name="respectProcedure" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="respectProcedure" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="respectProcedure" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    <td colspan="3" class="form-text-input"><textarea class="text-input" name="descriptionTravail"></textarea></td>
                </tr>
            </table>
            <button class="btn btn-primary form-button" type="submit">Envoyer</button>
        </form>
    </div>
    <script src="{{ asset('js/audit.js') }}"></script>
@endsection