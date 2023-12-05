@extends('layouts.app')
@section('content')
    <!--
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
            -->
            @if(isset($errors) && $errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif



<div class="form-main">
    <h2>Formulaire d'accident de travail</h2>
    <form method="POST" action="{{route('formulaireAccidentTravail.store')}}" class="form-auto">
        @csrf
        <table>
            <tr>
                <td colspan="3" class="form-text-input">
                    <input type="text" class="text-input" id="inputMatricule" name="matricule" disabled value="{{$personne->matricule}}" placeholder="Matricule">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="form-text-input">
                    <input type="datetime-local" class="text-input" name="dateAccident" id="dateAccident">
                </td>
            <tr>
            <tr>
                <td colspan="3" class="form-text-input">
                    <input type="text" class="text-input" id="lieu" name="lieu" placeholder="Lieu de l'accident">
                </td>    
            </tr>    
            <tr>
                <td colspan="3" class="form-text-input">
                    <textarea name="description" class="text-input" id="description" placeholder="Description de l'accident"></textarea>
                </td>
            </tr>
            <tr class="form-check-container">
                <td class="form-label ms-1"><strong>Est-ce qu'il y avait des témoins</strong></td>
                    <td class="form-check ms-5">
                        <input type="radio" name="ouiNon" class="form-check-input" id="Oui">
                        <label for="Oui" class="form-check-label">Oui</label>
                    </td>
                    <td class="form-check ms-5">
                        <input type="radio" name="ouiNon" checked class="form-check-input" id="Non">
                        <label for="Non" class="form-check-label">Non</label>
                    </td>
            </tr>
            <tr id="Temoin" class="temoinCacher">
                <td colspan="3" class="form-text-input">
                    <input type="text" class="text-input" id="inputTemoin" name="temoin" placeholder="Témoin">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="form-text-input">
                    <input type="text" class="text-input" id="nature" name="nature" placeholder="Nature et site de la blessure">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="form-text-input">
                    <textarea name="descriptionBlessure" class="text-input" id="descriptionBlessure" placeholder="Description de la blessure"></textarea>
                </td>
            </tr>
            <tr class="form-check-container">
                <td class="form-label ms-1"><strong>Est-ce qu'il y a eu violence</strong></td>
                <td class="form-check ms-5">
                    <input type="checkbox" class="form-check-input" name="violenceP" value="Physique" id="violenceP">
                    <label for="violenceP" class="form-check-label">Physique</label>
                </td>
                <td class="form-check ms-5">
                    <input type="checkbox" class="form-check-input" name="violenceV" value="Verbale" id="violenceV">
                    <label for="violenceV" class="form-check-label">Verbale</label>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="form-text-input">
                    <textarea name="comment" class="text-input" id="comment" placeholder="Comment s'est produit la blessure"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="form-text-input">
                    <input type="text" class="text-input" id="premierSoin" name="premierSoin" placeholder="Premier soin">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="form-text-input">
                    <input type="text" class="text-input" id="secouriste" name="nomSecouriste" placeholder="Nom du secouriste">
                </td>
            </tr>
            <tr class="form-check-container mt-3 mb-5">
                <td for="detail" class="form-label ms-1"><strong>Detail de l'accident</strong></td>
                <td class="form-check ms-5">
                    <input type="radio" name="detail" value="1" class="form-check-input" id="aucuneAbsence">
                    <label for="aucuneAbsence" class="form-check-label">Accident ne nécessitant aucune absence</label>
                </td>
                <td class="form-check ms-5">
                    <input type="radio" name="detail" value="2" class="form-check-input" id="absence">
                    <label for="absence" class="form-check-label">Accident nécessitant une consultation médicale</label>
                </td>
            </tr>
        </table>
        <button class="btn btn-primary form-button" type="submit">Envoyer</button>
    </form>
</div>


<script src="{{ asset('js/declarationAccident.js') }}"></script>
@endsection