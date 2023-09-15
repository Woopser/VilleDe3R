<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireAccidentTravailController;

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

Route::get('/', function () {
    return view('Menus/accueil');
});

Route::get('/', function () {
    return view('connection');
});
//route du formulaire declaration d'accident de travail =====================================================================================
Route::get('/formulaire/declarationAccident', [FormulaireAccidentTravailController::class, 'index'])->name('formulaireAccidenttravail');
