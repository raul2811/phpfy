@extends('layouts.app')

@section('title', $music->title)
@section('content')

<div class="container">
    <div class="music-details">
        <h1>{{ $music->title }}</h1>
        <p>Artista: {{ $music->artist }}</p>
        <p>Álbum: {{ $music->album }}</p>
        <p>Género: {{ $music->genre }}</p>
        <p>Año: {{ $music->year }}</p>
        <p>Duración: {{ $music->duration }}</p>
        <a href="{{ url('/') }}">Volver a la lista</a>
        <div id=.cover-image>
            @if($music->cover_image)
                <img src="data:image/jpeg;base64,{{ $music->cover_image }}" alt="{{ $music->title }}" class="cover-image">
            @endif
        </div>
<div class="fixed-player">
    <div class="player-controls">
        <audio controls>
            <source src="{{ url($music->file_path) }}" type="audio/flac">
            Tu navegador no soporta la reproducción de audio.
        </audio>
    </div>
</div>
@endsection
