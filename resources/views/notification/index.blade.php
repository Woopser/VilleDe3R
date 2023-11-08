@extends('layouts.app')

@section('V3R')

@section('content')
    <div style="height: 144.89px"></div>


    @if(isset($errors) && $errors->any())

     <div class="alert alert-danger">

         @foreach($errors->all() as $error)

             <p>{{$error}}</p>

        @endforeach

    </div>
@endif

@foreach($notifs as $notif)

<div><a href="{{ route('notification.show') }}">L'employé : {{$notif->matriculeEmploye}} à remplis le formulaire {{$notif->typeFormulaire}}</a></div>

@endforeach






@endsection