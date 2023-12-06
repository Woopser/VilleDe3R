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

@if(isset($forms))
    @foreach($forms as $form)
        <form method="POST" action="{{route('notification.update', [$notif->id])}}" class="notif-main notif-show">
            @csrf
            <div class="mb-3">
                <label for="matricule" class="form-label"><strong>Matricule</strong></label>
                <p>{{$form->matricule}}</p>
            </div>
            <div class="mb-3">
                <label for="dateAccident" class="form-label"><strong>Date de l'accident</strong></label>                   
                <p>{{$form->dateAccident}}</p>
            </div>
            <div class="mb-3">
                <label for="lieu" class="form-label"><strong>Quelle est le lieu de l'accident</strong></label>
                <p>{{$form->lieu}}</p>    
            </div>
            <div class="mb-3">
                <label for="description" class="form-label"><strong>Description de l'accident</strong></label>
                <p>{{$form->description}}</p>
            </div>
            <div id="Temoin" class="mb-3 temoinCacher">
                    <label for="temoin" class="form-label"><strong>Témoin</strong></label>
                    <p>{{$form->temoin}}</p>>
            </div>
            <div class="mb-3">
                <label for="nature" class="form-label"><strong>Nature</strong></label>            
                <p>{{$form->nature}}</p>
            </div>
            <div class="mb-3">
                <label for="descriptionBlessure" class="form-label"><strong>Description Blessure</strong></label>
                <p>{{$form->descriptionBlessure}}</p>
            </div>
            <div class="mb-3">
                <label for="violence" class="form-label"><strong>Es se qu'il y a eu de la violence</strong></label>
                <p>{{$form->violence}}</p>
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label"><strong>Comment s'est produit la blessure</strong></label>
                <p>{{$form->comment}}</p>
            </div>
            <div class="mb-3">
                <label for="premierSoin" class="form-label"><strong>Premier soin</strong></label>
                <p>{{$form->premierSoin}}</p>
            </div>
            <div class="mb-3">
                <label for="NomSecouriste" class="form-label"><strong>Nom du secouriste</strong></label>
                <p>{{$form->nomSecouriste}}</p>
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label"><strong>Detail de l'accident</strong></label>
                <p>{{$form->detail}}</p>
            </div>
            @if($notif->verifier == 0)
                <div class="d-flex justify-content-end">
                    <button type="submit" class="BTEnvoyer ">Verifier</button>
                </div>   
            @endif
            @if(Session::get('role') == "admin" && $notif->verifierAdmin == 0)
                <div class="d-flex justify-content-end">
                    <button type="submit" class="BTEnvoyer ">Verifier</button>
                </div> 
            @endif
        </form>  
    @endforeach
@endif
@endsection