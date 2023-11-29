@extends('layouts.app')

@section('content')
<div class="container">
    <div style="height: 115px"></div>
    <div>
        <div>
            <!--
            @if(isset($personne))
            <div class="modalYesNo" id="yesNoModal">
                <div style="height: 115px"></div>
                <div class="modalYesNo-content">
                    <p>Êtes-vous la personne blessée</p>
                    <p>avec ce matricule : {{$personne->matricule}}</p>
                    <p id="matriculeP" style="display: none">{{$personne->matricule}}</p>
                    <div class="d-flex justify-content-center">
                        <button class="buttonYesNo" style="background-color: #4CAF50;" id="yesButton">
                            Oui
                        </button>
                        <button class="buttonYesNo" style="background-color: #f44336;" id="nonButton">
                            Non
                        </button>
                    </div>
                </div>
            </div>
            @else
                <p>bipboup erreur</p>
            @endif
            -->
            @if(isset($errors) && $errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif

            <h1>Formulaire de signalement de situation dangeureuse</h1>
            @if(isset($personne))
            <form method="POST" action="{{route('notification.update')}}">
                @csrf
                    <div class="mb-3">
                        <label for="matricule" class="form-label"><strong>Matricule</strong></label>
                        <input type="text" class="form-control" id="inputMatricule" name="matricule" disabled value="{{$personne->matricule}}">
                    </div>
                <div class="mb-3">
                    <label for="dateAccident" class="form-label"><strong>Date de l'accident</strong></label>                   
                    <input type="datetime-local" class="form-control" name="dateAccident" id="dateAccident">
                    <p id="erreurDateAccident" class="erreurForm"></p>
                </div>
                <div class="mb-3">
                    <label for="lieu" class="form-label"><strong>Quelle est le lieu de l'accident</strong></label>
                    <input type="text" id="lieu" class="form-control" name="lieu">
                    <p id="erreurLieu" class="erreurForm"></p>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label"><strong>Description de l'accident</strong></label>
                    <textarea name="description" class="form-control" id="description"></textarea>
                    <p id="erreurDescription" class="erreurForm"></p>
                </div>
                <div class="mb-3">
                    <label for="temoinTrueFalse" class="form-label"><strong>Es se qu'il y a eu des temoin</strong></label>
                    <div class="d-flex justify-content-center">
                        <input type="radio" name="ouiNon" class="form-check-input" id="Oui">
                        <label style="margin-right: 20px; margin-left:5px" for="Oui" class="form-check-label">Oui</label>
                        <input style="margin-left: 20px; margin-right: 5px" type="radio" name="ouiNon" class="form-check-input" id="Non">
                        <label for="Non" class="form-check-label">Non</label>
                    </div>
                </div>
                <div id="Temoin" class="mb-3 temoinCacher">
                        <label for="temoin" class="form-label"><strong>Témoin</strong></label>
                        <input type="text" class="form-control" name="temoin" id="inputTemoin">
                    </div>
                <div class="mb-3">
                    <label for="nature" class="form-label"><strong>Nature et site de la blessure</strong></label>
                    <input type="text" class="form-control" name="nature" id="nature">
                    <p id="erreurNature" class="erreurForm"></p>
                </div>
                <div class="mb-3">
                    <label for="descriptionBlessure" class="form-label"><strong>Description Blessure</strong></label>
                    <textarea name="descriptionBlessure" class="form-control" id="descriptionBlessure"></textarea>
                    <p id="erreurBlessure" class="erreurForm"></p>
                </div>
                <div class="mb-3">
                    <label for="violence" class="form-label"><strong>Es se qu'il y a eu de la violence</strong></label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="violenceP" value="Physique">
                        <label for="violenecePhysique" class="form-check-label">Physique</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="violenceV" value="Verbale">
                        <label for="violeneceVerbale" class="form-check-label">Verbale</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label"><strong>Comment s'est produit la blessure</strong></label>
                    <textarea name="comment" class="form-control" id="comment"></textarea>
                    <p id="erreurComment" class="erreurForm"></p>
                </div>
                <div class="mb-3">
                    <label for="premierSoin" class="form-label"><strong>Premier soin</strong></label>
                    <input type="text" class="form-control" name="premierSoin" id="premierSoin">
                    <p id="erreurPremier" class="erreurForm"></p>
                </div>
                <div class="mb-3">
                    <label for="NomSecouriste" class="form-label"><strong>Nom du secouriste</strong></label>
                    <input type="text" class="form-control" name="nomSecouriste" id="secouriste">
                    <p id="erreurSecouriste" class="erreurForm"></p>
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label"><strong>Detail de l'accident</strong></label>
                    <div class="form-check">
                        <input type="radio" name="detail" value="1" class="form-check-input">
                        <label for="aucuneAbsence" class="form-check-label">Accident ne nécessitant aucune absence</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="detail" value="2" class="form-check-input">
                        <label for="aucuneAbsence" class="form-check-label">Accident nécessitant une consultation médicale</label>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="BTEnvoyer ">Remplir</button>
                </div>
            </form>
            @else
                <p>bipboup erreur</p>
            @endif
            <div style="height: 115px"></div>
        </div>
    </div>
</div>

<script src="{{ asset('js/declarationAccident.js') }}"></script>
@endsection