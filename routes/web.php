<?php

use Illuminate\Support\Facades\Route;

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


//------------- Authentification
Route::get('/connexion', function () {
    return view('connexion');
});

Route::post('/connexion/login', [UserController::class 'login'])->name('user.login');

Route::post('');
