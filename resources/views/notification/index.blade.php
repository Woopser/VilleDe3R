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

    <div class="notif-main">
        <h1>Formulaires non vérifiés</h1>
        <table class="notif-table">
            @foreach($notifs as $notif)
                @foreach($users as $user)
                    @if($notif->typeFormulaire == "accidentTravail" && $notif->verifier == "0")
                        <tr>
                            <td>
                                <a href="{{ route('notification.accTravail', [$notif->id]) }}" >L'employé : {{$user->prenom}} {{$user->nom}} à remplis le formulaire {{$notif->typeFormulaire}}</a>
                            </td>
                        </tr>
                    @elseif($notif->typeFormulaire == "accidentAuto" && $notif->verifier == "0")
                        <tr>
                            <td>
                                <a href="{{ route('notification.accAuto', [$notif->id]) }}" >L'employé : {{$user->prenom}} {{$user->nom}} à remplis le formulaire {{$notif->typeFormulaire}}</a>
                            </td>
                        </tr>
                    @elseif($notif->typeFormulaire == "audit" && $notif->verifier == "0") 
                        <tr>
                            <td>
                                <a href="{{ route('notification.audit', [$notif->id]) }}" >L'employé : {{$user->prenom}} {{$user->nom}} à remplis le formulaire {{$notif->typeFormulaire}}</a>
                            </td>
                        </tr>
                    @elseif($notif->typeFormulaire == "situation" && $notif->verifier == "0")
                        <tr>
                            <td>
                                <a href="{{ route('notification.situation', [$notif->id]) }}" >L'employé : {{$user->prenom}} {{$user->nom}} à remplis le formulaire {{$notif->typeFormulaire}}</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
        </table>

        <h1>Formulaires vérifiés</h1>
        <table class="notif-table">
            @foreach($notifs as $notif)
                @foreach($users as $user)
                    @if($notif->typeFormulaire == "accidentTravail" && $notif->verifier == "1")
                        <tr>
                            <td>
                                <a href="{{ route('notification.accTravail', [$notif->id]) }}" >L'employé : {{$user->prenom}} {{$user->nom}} à remplis le formulaire {{$notif->typeFormulaire}}</a>
                            </td>
                        </tr>
                    @elseif($notif->typeFormulaire == "accidentAuto" && $notif->verifier == "1")
                        <tr>
                            <td>
                                <a href="{{ route('notification.accAuto', [$notif->id]) }}" >L'employé : {{$user->prenom}} {{$user->nom}} à remplis le formulaire {{$notif->typeFormulaire}}</a>
                            </td>
                        </tr>
                    @elseif($notif->typeFormulaire == "audit" && $notif->verifier == "1") 
                        <tr>
                            <td>
                                <a href="{{ route('notification.audit', [$notif->id]) }}" >L'employé : {{$user->prenom}} {{$user->nom}} à remplis le formulaire {{$notif->typeFormulaire}}</a>
                            </td>
                        </tr>
                    @elseif($notif->typeFormulaire == "situation" && $notif->verifier == "1")
                        <tr>
                            <td>
                                <a href="{{ route('notification.situation', [$notif->id]) }}" >L'employé : {{$user->prenom}} {{$user->nom}} à remplis le formulaire {{$notif->typeFormulaire}}</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
        </table>
    </div>
@endsection