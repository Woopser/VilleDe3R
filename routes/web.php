<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireAccidentTravailController;
use App\Http\Controllers\AccidentAutosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuditsController;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\SituationController;
use App\Http\Controllers\LienController;


//Route pour pages de liens 
Route::get('/accueil/liens',
[LienController::class, 'index'])->name('lien.index');

Route::get('/accueil/AjoutLien',
[LienController::class, 'spindex'])->name('lien.spindex');

Route::POST('/acceuil/store',
[LienController::class, 'store'])->name('lien.store');



=======
use App\Http\Middleware\CheckRole;

// ================================================================= Route pour admin ==========================================================================================
Route::middleware(['CheckRole:admin'])->group(function(){

});
// ============================================================ Route pour admin et superieur ===================================================================================
Route::middleware(['CheckRole:admin,superieur'])->group(function(){
    // ---------------------------------------------------- Route pour formulaire accident de voiture ----------------------------------------------------------------------------
    Route::get('/formulaires/accidentVoiture',[AccidentAutosController::class, 'index'])->name('formulaireAccidentAuto');
    Route::post('/formulaires/accidentVoiture', [AccidentAutosController::class, 'store'])->name('accidentAuto.store');
    //---------------------------------------------------------- Route pour Grille Audit SST-------------------------------------------------------------------------------------------
    Route::get('/formulaires/audit', [AuditsController::class, 'index'])->name('formulaireAudit');
    Route::POST('formulaire/audit/store', [AuditsController::class, 'store'])->name('audit.store');
    //------------------------------------------------------------------ Notification --------------------------------------------------------------------------------------------
    Route::get('/notifications',[NotificationController::class,'index'])->name('notification.index');
    Route::get('/notifications/accTravail/{id}',[NotificationController::class,'accTravail'])->name('notification.accTravail');
    Route::get('/notifications/audit/{id}',[NotificationController::class,'audit'])->name('notification.audit');
    Route::get('/notifications/accAuto/{id}',[NotificationController::class,'accAuto'])->name('notification.accAuto');
    //Route::get('/notifications/accTravail/{id}',[NotificationController::class,'show'])->name('notification.show');
});
// ================================================================ Route pour supérieur ========================================================================================
Route::middleware(['CheckRole:superieur'])->group(function(){

});
// ================================================================ Route pour employe ===========================================================================================
Route::middleware(['CheckRole:employe'])->group(function(){

});
// =========================================================== Route pour tous mais prive ========================================================================================
Route::middleware(['CheckRole:admin,superieur,employe'])->group(function(){
    Route::get('/accueil',[MenuController::class, 'index'])->name('menus.index');
    Route::get('/formulaires',[FormulaireController::class, 'index'])->name('form.index');
    // --------------------------------------------------------- Route liste de formulaire ----------------------------------------------------------------------------------------
    Route::get('/formulaire/liste',[MenuController::class, 'listeForm'])->name('menu.listeForm');
    // ------------------------------------------------- Route pour Situations dangeureuse --------------------------------------------------------------------------------------
    Route::get('formulaires/situationDang',[SituationController::class, 'index'])->name('formulaireSit');
    Route::POST('formulaires/situationDang/store', [SituationController::class, 'store'])->name('situationDang.store');
    //---------------------------------------------- Route du formulaire declaration d'accident de travail -------------------------------------------------------------------
    Route::get('/formulaires/declarationAccident', [FormulaireAccidentTravailController::class, 'index'])->name('formulaireAccidentTravail');
    Route::POST('/formulaires/declarationAccident/store',[FormulaireAccidentTravailController::class, 'store'])->name('formulaireAccidentTravail.store');
});
// ================================================================ Route pour tous =============================================================================================
// --------------------------------------------------------------- Route pour login ----------------------------------------------------------------------------------------------
Route::post('/connexion/login',[UsersController::class, 'login'])->name('users.login');
Route::post('/connexion/logout',[UsersController::class, 'logout'])->name('users.logout');
Route::get('/',[UsersController::class, 'index'])->name('users.index');

