@extends('layouts.app')

@section('content')
<div class="container">
    <div style="height: 115px"></div>
    <div>
        <div>
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
            <form action="">
                @csrf
                    <div class="mb-3">
                        <label for="matricule" class="form-label">Matricule</label>
                        <input type="text" class="form-control" id="inputMatricule" name="matricule">
                    </div>
                    <!--- à voir avec la ville 
                    <div class="mb-3">
                        <label for="superviseur" class="form-label">Superviseur</label>
                        <input type="text" class="form-control" name="superviseur">
                    </div>
                    -->
                <div class="mb-3">
                    <label for="dateAccident" class="form-label">Date de l'accident</label>                   
                    <input type="date-time" class="form-control" name="dateAccident">
                </div>
                <div class="mb-3">
                    <label for="lieu" class="form-label">Quelle est le lieu de l'accident</label>
                    <input type="text" class="form-control" name="lieu">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description de l'accident</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="temoinTrueFalse" class="form-label">Es se qu'il y a eu des temoin</label>
                    <div class="d-flex justify-content-center">
                        <input type="radio" name="ouiNon" class="form-check-input" id="Oui">
                        <label style="margin-right: 20px; margin-left:5px" for="Oui" class="form-check-label">Oui</label>
                        <input style="margin-left: 20px; margin-right: 5px" type="radio" name="ouiNon" class="form-check-input" id="Non">
                        <label for="Non" class="form-check-label">Non</label>
                    </div>
                </div>
                <div id="Temoin" class="mb-3 temoinCacher">
                        <label for="temoin" class="form-label">Témoin</label>
                        <input type="text" class="form-control" name="temoin" id="inputTemoin">
                    </div>
                <div class="mb-3">
                    <label for="nature" class="form-label">Nature</label>
                    <input type="text" class="form-control" name="nature">
                </div>
                <div class="mb-3">
                    <label for="descriptionBlessure" class="form-label">Description Blessure</label>
                    <textarea name="descriptionBlessure" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="violence" class="form-label">Es se qu'il y a eu de la violence</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="violence" value="Physique">
                        <label for="violenecePhysique" class="form-check-label">Physique</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="violence" value="Verbale">
                        <label for="violeneceVerbale" class="form-check-label">Verbale</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Comment s'est produit la blessure</label>
                    <textarea name="comment" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="premierSoin" class="form-label">Premier soin</label>
                    <input type="text" class="form-control" name="premierSoin">
                </div>
                <div class="mb-3">
                    <label for="NomSecouriste" class="form-label">Nom du secouriste</label>
                    <input type="text" class="form-control" name="nomSecouriste">
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Detail de l'accident</label>
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
                    <button class="BTEnvoyer ">Remplir</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection