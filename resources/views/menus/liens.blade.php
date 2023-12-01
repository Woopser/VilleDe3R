@extends('layouts.app')

@section('V3R')

@section('content')

<h1> Liens utiles</h1>


<div>
    <div>
        <h2>Direction Général</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 1)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Approvisionnement</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 2)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Communication et participation citoyenne</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 3)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Finances</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 4)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Greffe, gestion des documents et archives</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 5)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Ressources Humaines</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 6)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Aménagement et développement durable</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 7)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Bureau de projets et des actifs</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 8)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Évaluation</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 9)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Génie</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 10)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Technologie de l'information</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 11)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Culture, loisirs et vie communautaire</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 12)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Gestion des eaux et des immeubles</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 13)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Police</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 14)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Sécurité incendie et sécurité civile</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 15)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div>
        <h2>Services juridiques</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 16)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>

    <div style="margin-bottom:200px;">
        <h2>Travaux publics</h2>
        @foreach($liens as $lien)
        @if($lien->departement == 17)
            <div><a href="{{$lien->lien}}" target="_blank">{{$lien->nom}}</a></div>
        @endif
        @endforeach
    </div>



</div>

@endsection