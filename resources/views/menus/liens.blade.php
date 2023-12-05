@extends('layouts.app')

@section('V3R')

@section('content')

<h1> Liens utiles</h1>

<h2> {{$lian->nom}} </h2>
@foreach($liens as $lien)

   <a href="{{$lien->lien}}">{{$lien->nom}}</a>

@endforeach

</div>

@endsection