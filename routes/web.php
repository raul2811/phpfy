<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/music', [LoginController::class, 'logados'])->name('logados');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Ruta para listar todas las canciones
Route::get('/music', [MusicController::class, 'index']);

// Ruta para mostrar los detalles de una canción específica
Route::get('/musics/{id}', [MusicController::class, 'show']);

Route::get('/music-player', function () {
    return view('music-player');
});

Route::get('/', function () {
    return view('index');
});
