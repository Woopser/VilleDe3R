@extends('layouts.app')

@section('V3R')

@section('content')

<div class="container">
    <div style="height: 115px"></div>
<div class="container">
    <a class=" noir" href="{{ route('formulaireAccidentAuto')}}">Formulaire accident d'auto</a>
</div>
<div class="container">
    <a class=" noir" href="{{ route('formulaireAccidentTravail')}}">Formulaire accident</a>
</div>
</div>




@endsection