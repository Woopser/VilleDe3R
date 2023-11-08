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

@if(isset($notifs))


@foreach($accTravails->where('nomSecouriste','sda') as $accTravail)
<div>
    <p>test : {{$accTravail->matricule}}</p>
</div>
@endforeach


@endif


@endsection