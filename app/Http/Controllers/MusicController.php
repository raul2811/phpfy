<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;


class MusicController extends Controller
{
    public function index()
    {
        $musics = Music::all();
        return view('music.index', compact('musics'));
    }

    public function show($id)
    {
        $music = Music::find($id);
        return view('music.show', compact('music'));
    }
}

