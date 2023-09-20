<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccidentAutosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MenuController;
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

Route::get('/',
[MenuController::class, 'index'])->name('Menus.accueil');


//------------- Authentification
Route::get('/connexion',
[UsersController::class, 'index'])->name('users.index');

Route::post('/connexion/login',
[UsersController::class, 'login'])->name('users.login');

Route::post('/connexion/logout',
[UsersController::class, 'logout'])->name('users.logout');


