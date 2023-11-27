@extends('layouts.app')

@section('V3R')

@section('content')

<h1> ADPOIWJADIOAWJDIOA </h1>


<form method="POST" action="{{route('lien.store')}}">
    @csrf

        <div class="mb-3">
            <label for="dept" class="form-label"><strong>Département : </strong></label>
            <select class="form-select" aria-label="Default select example" name="departement">
            @foreach($departements as $departement)
                <option value="{{$departement->id}}">{{$departement->nom}}</option>
            @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nomEmp" class="form-label"> <strong>Nom de la ressource:  </strong></label>
            <input type="text" class="form-control" id="nomEmp" name="nom">
        </div>

        <div class="mb-3">
            <label for="nomEmp" class="form-label"> <strong>Lien de la ressource:  </strong></label>
            <input type="text" class="form-control" id="nomEmp" name="lien">
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>

</form>


@endsection