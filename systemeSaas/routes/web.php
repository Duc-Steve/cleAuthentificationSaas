<?php

use Illuminate\Support\Facades\Route;





use App\Http\Middleware\AuthentificationMiddleware;
use App\Http\Controllers\GestionController\PremiumController\PageTableauBordController;
use App\Http\Controllers\GestionController\BasiqueController\PageConnexionController;
use App\Http\Controllers\GestionController\BasiqueController\PagePremierAdministrateurController;
use App\Http\Controllers\GestionController\BasiqueController\GenererSessionConnexionController;
use App\Http\Controllers\GestionController\BasiqueController\EnregistrerPremierAdminController;
use App\Http\Controllers\GestionController\BasiqueController\DeconnexionAdminController;


// Route pour l'interface administrateur standard clesaas.amosag.com
// Accessible aux administrateurs
// Exemple : https://clesaas.amosag.com/

// Route::domain('clesaas.amosag.com')->group(function () {

    Route::prefix('/')->middleware(AuthentificationMiddleware::class)->group(function () {
        Route::get('/', [PageTableauBordController::class, 'index'])->name('tableau-bord');
    });

    Route::get('/connexion', [PageConnexionController::class, 'index'])->name('connexion');

    Route::post('/connexion', [GenererSessionConnexionController::class, 'session'])->name('connexion.session');
    
    Route::get('/administrateur', [PagePremierAdministrateurController::class, 'index'])->name('administrateur');
    
    Route::post('/administrateur', [EnregistrerPremierAdminController::class, 'create'])->name('administrateur.creation');
    
    Route::get('/deconnexion', [DeconnexionAdminController::class, 'index'])->name('deconnexion');


//});
