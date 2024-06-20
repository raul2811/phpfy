<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $music->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        .container {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }
        .music-details {
            flex-grow: 1;
        }
        .cover-image {
            max-width: 200px;
            max-height: 200px;
            border-radius: 10px;
        }
        .fixed-player {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f8f8;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }
        .player-controls {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        @if($music->cover_image)
            <img src="data:image/jpeg;base64,{{ $music->cover_image }}" alt="{{ $music->title }}" class="cover-image">
        @endif
        <div class="music-details">
            <h1>{{ $music->title }}</h1>
            <p>Artista: {{ $music->artist }}</p>
            <p>Álbum: {{ $music->album }}</p>
            <p>Género: {{ $music->genre }}</p>
            <p>Año: {{ $music->year }}</p>
            <p>Duración: {{ $music->duration }}</p>
            <a href="{{ url('/musics') }}">Volver a la lista</a>
        </div>
    </div>
    <div class="fixed-player">
        <div class="player-controls">
            <audio controls>
                <source src="{{ url($music->file_path) }}" type="audio/flac">
                Tu navegador no soporta la reproducción de audio.
            </audio>
        </div>
    </div>
</body>
</html>
