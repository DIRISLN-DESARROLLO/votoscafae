<?php

use App\Http\Controllers\VotacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckSession;
use App\Http\Controllers\ImportarController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\ConstanciaController;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('cerrarsession');

Route::middleware('auth')->group(function () {
    Route::get("/home",[HomeController::class,'index'])->name('home')->middleware(CheckSession::class);
    Route::get("/verificarFecha",[HomeController::class,'verificar'])->name('verificarFecha')->middleware(CheckSession::class);
    /*Otros*/
    Route::get("/dashboard",[VotacionController::class,'resultados'])->name('dashboard')->middleware(CheckSession::class);
    Route::get('/resultados', [VotacionController::class, 'resultados'])->name('resultados')->middleware(CheckSession::class);
    /*Info de Listas*/
    Route::get('/listas', [ListaController::class, 'index'])->name('listas')->middleware(CheckSession::class);
    /*Votar*/
    Route::get('/votacion', [VotacionController::class, 'show'])->name('votacion')->middleware(CheckSession::class);
    Route::post('/votar', [VotacionController::class, 'votar'])->name('votar')->middleware(CheckSession::class);
    /*Constancia*/
    Route::get('/constancia', [ConstanciaController::class, 'generarConstanciaPdf'])->name('constancia')->middleware(CheckSession::class);

});
/*
Route::post('/import-excel', [ImportarController::class, 'importExcel']);
Route::get('/importar', [ImportarController::class, 'index']);
*/
