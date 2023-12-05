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
    <h2>Formulaire de signalement de situation dangeureuse</h2>
    <form method="POST" action="{{route('situationDang.store')}}" class="form-auto">
        @csrf
        <table>
            <tr>
                <td colspan="3" class="form-text-input">
                    <input type="text" class="text-input" id="fonct" name="fonction" placeholder="Fonction au moment de l'evenement">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="form-text-input">
                    <input type="text" class="text-input" id="secteur" name="secteur" placeholder="Secteur d'activité">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="datetime-local" class="text-input" id="dateSit" name="dateObservation">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="form-text-input">
                    <input type="text" class="text-input" id="Temoin" name="temoin" placeholder="Témoin(s)">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="form-text-input">
                    <input type="text" class="text-input" id="Lieu" name="lieu" placeholder="Lieu">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="form-text-input">
                    <textarea name="description" class="text-input" id="description" placeholder="Description"></textarea>
                </td>
            </tr>
            <tr class="mb-5">
                <td colspan="3" class="form-text-input">
                    <textarea name="correction" class="text-input" id="correction" placeholder="Correction"></textarea>
                </td>
            </tr>
        </table>
        <button class="btn btn-primary form-button" type="submit">Envoyer</button>
    </form>
</div>
@endsection