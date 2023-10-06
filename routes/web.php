<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireAccidentTravailController;
use App\Http\Controllers\AccidentAutosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuditsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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


//-------------Route formulaires accidenet cahr
Route::post('/formulaires/accidentVoiture', [AccidentAutosController::class, 'store'])->name('accidentAuto.store');

//route du formulaire declaration d'accident de travail =====================================================================================
Route::get('/formulaire/declarationAccident', [FormulaireAccidentTravailController::class, 'index'])->name('formulaireAccidenttravail');


//-----------------Route pour Grille Audit SST
Route::get('/formulaires/audit', [AuditsController::class, 'index'])->name('formulaireAudit');