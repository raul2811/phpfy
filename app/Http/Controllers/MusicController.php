<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    public function index()
    {
        // Usar paginación en lugar de cargar todos los registros
        $musics = Music::paginate(10); // 10 registros por página
        return view('music.index', compact('musics'));
    }

    public function show($id)
    {
        $music = Music::findOrFail($id);
        return view('music.show', compact('music'));
    }
}