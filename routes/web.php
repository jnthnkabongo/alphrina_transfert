<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\colisController;
use App\Http\Controllers\conteneurController;
use App\Http\Controllers\depensesController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\index;
use App\Http\Controllers\transfertController;
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

//Les routes du système d'authentification
Route::get('/', [authController::class, 'index'])->name('page-accueil');
Route::post('/', [authController::class, 'create'])->name('soumission');
Route::get('gestion-app', [homeController::class, 'index'])->name('redirect');
Route::get('logout', [authController::class, 'destroy'])->name('logout');

Route::middleware(['connexion'])->group(function () {

    // Les route du dash
    Route::get('index', [index::class, 'index'])->name('index'); // Dashboard

    // Les routes de la partie transactions

    Route::get('liste-transaction', [transfertController::class, 'index'])->name('index-transaction');
    Route::get('creation-transaction', [transfertController::class, 'create'])->name('creation-transaction');
    Route::post('creation-transaction', [transfertController::class, 'show'])->name('creation-transactions');
    Route::get('visualisation-transaction-{itemtrasaction}', [transfertController::class, 'store'])->name('visualisation-transaction');
    Route::get('modifier-transaction-{itemtrasaction}', [transfertController::class, 'edit'])->name('modifier-transaction');
    Route::get('modifier-transactions-{itemtrasaction}', [transfertController::class, 'update'])->name('modifier-transactions');
    Route::get('suppression-transaction-{itemtrasaction}', [transfertController::class, 'destroy'])->name('suppression-transaction');

    // Les routes de la partie depenses
    Route::get('liste-depenses', [depensesController::class, 'index'])->name('index-depenses');

    // Les routes de la partie conteneur
    Route::get('index-conteneur', [conteneurController::class, 'index'])->name('index-conteneur');


    // Les routes de la partie colis
    Route::get('index-colis', [colisController::class, 'index'])->name('index-colis');

});

Route::get('page-404', [homeController::class, 'destroy'])->name('error-page');
