<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $music->title }}</title>
</head>
<body>
    <h1>{{ $music->title }}</h1>
    <p>Artista: {{ $music->artist }}</p>
    <p>Álbum: {{ $music->album }}</p>
    <p>Género: {{ $music->genre }}</p>
    <p>Año: {{ $music->year }}</p>
    <p>Duración: {{ $music->duration }}</p>
    <audio controls>
        <source src="{{ url($music->file_path) }}" type="audio/flac">
        Tu navegador no soporta la reproducción de audio.
    </audio>
    <br>
    <a href="{{ url('/musics') }}">Volver a la lista</a>
</body>
</html>

