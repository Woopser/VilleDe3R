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
@if($notif->typeFormulaire == "accidentTravail")
    <div>
    <a href="{{ route('notification.accTravail', [$notif->id]) }}" >L'employé : {{$notif->matriculeEmploye}} à remplis le formulaire {{$notif->typeFormulaire}}</a>
    </div>

@elseif($notif->typeFormulaire == "accidentAuto")
    <div>
    <a href="{{ route('notification.accAuto', [$notif->id]) }}" >L'employé : {{$notif->matriculeEmploye}} à remplis le formulaire {{$notif->typeFormulaire}}</a>
    </div>

@endif

@endforeach






@endsection