<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;

// Ruta para listar todas las canciones
Route::get('/', [MusicController::class, 'index']);

// Ruta para mostrar los detalles de una canción específica
Route::get('/musics/{id}', [MusicController::class, 'show']);

