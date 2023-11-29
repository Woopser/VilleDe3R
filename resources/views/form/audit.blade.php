@extends('layouts.app')
@section('V3R')
@section('content')
    <div class="form-main">
        <h2>Formulaire d'audit SST</h2>
        <form method="POST" action="{{route('audit.store')}}">
            @csrf
            <table>
                <tr>
                    <td colspan="3" class="form-text-input"><input type="text" name="lieu" class="text-input" placeholder="Lieu des travaux"></td>
                </tr>
                <tr>
                    <td colspan="3" class="form-text-input"><input type="datetime-local" name="date" class="text-input"></td>
                </tr>
                <tr>
                    <th></th>
                    <th class="table-header"><i class="fa-solid fa-check" style="color: #04ff00"></i></th>
                    <th class="table-header"><i class="fa-solid fa-x" style="color: #ff0000;"></i></th>
                    <th>N/A</th>
                </tr>
                <tr>
                    <td>EPI</th>
                    <td><input type="radio" name="EPI" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="EPI" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="EPI" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    <td>Tenue des lieux</th>
                    <td><input type="radio" name="tenueLieux" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="tenueLieux" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="tenueLieux" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    <td>Comportement sécuritaire</th>
                    <td><input type="radio" name="comportement" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="comportement" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="comportement" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    <td>Signalisation</td>
                    <td><input type="radio" name="signalisation" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="signalisation" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="signalisation" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    <td>Fiches Signalétiques</td>
                    <td><input type="radio" name="ficheSignaletique" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="ficheSignaletique" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="ficheSignaletique" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    <td>Travaux - Excavation</td>
                    <td><input type="radio" name="travaux" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="travaux" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="travaux" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    <td>Espace clos</td>
                    <td><input type="radio" name="espaceClos" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="espaceClos" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="espaceClos" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    <td>Méthode de travail</td>
                    <td><input type="radio" name="methode" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="methode" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="methode" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    <td>Autres (optionnel)</td>
                    <td><input type="radio" name="autres" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="autres" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="autres" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    
                    <td colspan="3" class="form-text-input"><input type="text" class="text-input" placeholder="Veuillez préciser" name="lieu"></td>
                </tr>
                <tr>
                    <td>Distanciation Sociale</td>
                    <td><input type="radio" name="distanciation" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="distanciation" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="distanciation" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    <td>Port des EPI (masques/visières)</td>
                    <td><input type="radio" name="portMasque" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="portMasque" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="portMasque" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    <td>Respect des procédures établis</td>
                    <td><input type="radio" name="respectProcedure" value="0" class="form-check-input"></td>
                    <td><input type="radio" name="respectProcedure" value="1" class="form-check-input"></td>
                    <td><input type="radio" name="respectProcedure" value="2" class="form-check-input"></td>
                </tr>
                <tr>
                    <td colspan="3"><textarea name="lieu"></textarea></td>
                </tr>
            </table>
            <button class="btn btn-primary form-button" type="submit">Envoyer</button>
        </form>
    </div>
@endsection