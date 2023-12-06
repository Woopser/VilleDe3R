@extends('layouts.app')

@section('V3R')

@section('content')
    <div id="accueil">
        <div class="display-flex">
            <a href="javascript:void(0)" onclick="toggleModal()" class="boutonMenu hvr-shrink">
                <div class="boutonMenu-content">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                        </svg>
                    </div>
                    <div>                       
                        <p class="titleFont"> Formulaires </p> 
                    </div>  
                </div>
            </a>

            <a href="{{route('lien.index')}}" class="boutonMenu hvr-shrink">
                <div class="boutonMenu-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                    </svg>
                    <p class="titleFont"> Liens Utiles </p> 
                </div>
            </a>
        </div>
        @if(Session::get('role') == "admin" || Session::get('role') == "superieur" )
        <div class="display-flex">    
            @if(Session::get('role') == "admin")
                <a href="{{ route('notification.indexAdmin') }}" class="boutonMenuLarge hvr-shrink">
            @elseif(Session::get('role') == "superieur")
                <a href="{{ route('notification.index') }}" class="boutonMenuLarge hvr-shrink">
            @endif
                <div class="boutonMenu-content">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="titleFont"> Notifications </p> 
                    </div>  
                </div>
            </a>
            
        </div>
        @endif
    </div>

    <div class="modal-form" id="modal-form">
        <div class="modal-content">
            <a href="{{ route('formulaireAccidentTravail') }}">Accident de travail</a>
            <a href="{{ route ('formulaireSit')}}">Situation dangereuse</a>
            @if(Session::get('role') == "admin" || Session::get('role') == "superieur" )
            <a href="{{ route('formulaireAccidentAuto') }}">Accident de voitures</a>
            <a href="{{ route('formulaireAudit') }}">Grille audit SST</a>
            @endif
        </div>
    </div>
@endsection
