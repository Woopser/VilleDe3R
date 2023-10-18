@extends('layouts.app')

@section('V3R')

@section('content')
    <div style="height: 100.05px"></div>


    <h2>Formulaire d'audit SST</h2>

    <form method="POST" >
        @csrf

        <div class="mb-3">
            <label for="numImp" class="form-label">Nom de l'employé :</label>
            <input type="text" class="form-control" id="numUnit" name="">
        </div>

    </form>





@endsection