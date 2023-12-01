@extends('layouts.app')

@section('V3R')

@section('content')

<h1> Liens utiles</h1>


<div>
    <div>
        
        @foreach($liens as $lien)
        @if($lien->departement == 1)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    



</div>

@endsection