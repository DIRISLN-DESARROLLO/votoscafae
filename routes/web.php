<?php

use App\Http\Controllers\VotacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckSession;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('cerrarsession');

Route::middleware('auth')->group(function () {
    Route::get("/home",[HomeController::class,'index'])->name('home')->middleware(CheckSession::class);
    Route::get("/dashboard",[VotacionController::class,'resultados'])->name('dashboard')->middleware(CheckSession::class);
    Route::get('/resultados', [VotacionController::class, 'resultados'])->name('resultados')->middleware(CheckSession::class);
    Route::get('/listas', [VotacionController::class, 'show'])->name('listas')->middleware(CheckSession::class);
    Route::get('/votacion', [VotacionController::class, 'show'])->name('votacion')->middleware(CheckSession::class);
    Route::post('/votacion', [VotacionController::class, 'votar'])->name('votar')->middleware(CheckSession::class);
});



