<?php

use App\Http\Controllers\VotacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
Route::get('/', function () {
    return view('pruebas');
});
*/

/*Route::get('/', function () {
    return view('admin.index');
});*/

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/votacion', [VotacionController::class, 'show'])->name('votacion');
    Route::post('/votacion', [VotacionController::class, 'votar'])->name('votar');
    Route::get('/resultados', [VotacionController::class, 'resultados'])->name('resultados');
});
