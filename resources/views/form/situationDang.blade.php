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
<div style="height: 100.05px"></div>
<h1>Formulaire de signalement de situation dangeureuse</h1>

<form method="POST" action="">
    @csrf

    ¯ mn

</form>

@endsection