<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para listar todas las canciones
Route::get('/musics', [MusicController::class, 'index']);

// Ruta para mostrar los detalles de una canción específica
Route::get('/musics/{id}', [MusicController::class, 'show']);

