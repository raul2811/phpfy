@extends('layouts.app')

@section('title', $music->title)
@section('content')

<div class="bg-gray-900 text-white min-h-screen w-screen p-6">
    <div class="container mx-auto">
        <div class="music-details mb-8">
            <h1 class="text-4xl font-bold mb-4">{{ $music->title }}</h1>
            <p class="text-xl">Artista: <span class="text-gray-400">{{ $music->artist }}</span></p>
            <p class="text-xl">Álbum: <span class="text-gray-400">{{ $music->album }}</span></p>
            <p class="text-xl">Género: <span class="text-gray-400">{{ $music->genre }}</span></p>
            <p class="text-xl">Año: <span class="text-gray-400">{{ $music->year }}</span></p>
            <p class="text-xl">Duración: <span class="text-gray-400">{{ $music->duration }}</span></p>
            <a href="{{ url('/music') }}" class="text-green-500 hover:text-green-400 mt-4 inline-block">Volver a la lista</a>
            <div class="mt-6">
                @if($music->cover_image)
                    <img src="data:image/jpeg;base64,{{ $music->cover_image }}" alt="{{ $music->title }}" class="cover-image w-64 h-64 rounded-lg shadow-lg">
                @endif
            </div>
        </div>
    </div>
    <div class="fixed-player fixed bottom-0 left-0 w-full bg-gray-800 p-4 flex items-center justify-center">
        <div class="player-controls w-full max-w-4xl">
            <audio controls class="w-full">
                <source src="{{ url($music->file_path) }}" type="audio/flac">
                Tu navegador no soporta la reproducción de audio.
            </audio>
        </div>
    </div>
</div>

@endsection
