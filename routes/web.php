<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireAccidentTravailController;
use App\Http\Controllers\AccidentAutosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuditsController;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\SituationController;

//Route pour formulaire accident de voiture
Route::get('/formulaires/accidentVoiture',
[AccidentAutosController::class, 'index'])->name('formulaireAccidentAuto');

Route::get('/accueil',
[MenuController::class, 'index'])->name('menus.index');


//------------- Authentification
Route::get('/',
[UsersController::class, 'index'])->name('users.index');

Route::post('/connexion/login',
[UsersController::class, 'login'])->name('users.login');

Route::post('/connexion/logout',
[UsersController::class, 'logout'])->name('users.logout');

//------------- Route liste formulaire
Route::get('/formulaires',[FormulaireController::class, 'index'])->name('form.index');

//-------------Route formulaires accidenet char
Route::post('/formulaires/accidentVoiture', [AccidentAutosController::class, 'store'])->name('accidentAuto.store');

//route du formulaire declaration d'accident de travail =====================================================================================
Route::get('/formulaire/declarationAccident', [FormulaireAccidentTravailController::class, 'index'])->name('formulaireAccidentTravail');
Route::POST('/formulaire/declarationAccident/store',[FormulaireAccidentTravailController::class, 'store'])->name('formulaireAccidentTravail.store');


//-----------------Route pour Grille Audit SST-------------------------------------------------//
Route::get('/formulaires/audit', [AuditsController::class, 'index'])->name('formulaireAudit');
Route::POST('formulaire/audit/store', [AuditsController::class, 'store'])->name('audit.store');

//-----Route pour Situations dangeureuse-----------//
Route::get('formulaires/situationDang',[SituationController::class, 'index'])->name('formulaireSit');
Route::POST('formulaires/situationDang/store', [SituationController::class, 'store'])->name('situationDang.store');

// Route liste de formulaire ==================================================================================================================
Route::get('/formulaire/liste',[MenuController::class, 'listeForm'])->name('menu.listeForm');

