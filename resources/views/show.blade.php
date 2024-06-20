<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $music->title }}</title>
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
            <a href="{{ url('/') }}">Volver a la lista</a>
        </div>
    </div>

    <div class="fixed-player">
        <div class="player-controls">
            <audio controls>
                <source src="{{ url($music->file_path) }}" type="audio/flac">
                Tu navegador no soporta la reproducción de audio.
            </audio>
            <div id="lyrics-container"></div>
        </div>
    </div>

    <script>
        const artistName = '{{ $music->artist }}';
        const trackName = '{{ $music->title }}';
        const albumName = '{{ $music->album }}';
        const duration = {{ $music->duration }};

        const params = new URLSearchParams({
            artist_name: artistName,
            track_name: trackName,
            album_name: albumName,
            duration: duration
        });

        const url = `https://lrclib.net/api/get?${params.toString()}`;

        const lyricsContainer = document.getElementById('lyrics-container');
        lyricsContainer.innerHTML = '<div class="loading">Buscando letras...</div>';
        console.log('Buscando letra para:', { artistName, trackName, albumName, duration });

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.lyrics && data.lyrics.length > 0) {
                    lyricsContainer.innerHTML = `
                        <h2>Letras encontradas:</h2>
                        <ul>
                            ${data.lyrics.map((lyric, index) => `<li><a href="#" onclick="loadLyric(${index})">${lyric.track_name} - ${lyric.artist_name}</a></li>`).join('')}
                        </ul>
                        <div id="selected-lyric"></div>
                    `;
                } else {
                    lyricsContainer.innerHTML = '<div class="error">Letra no encontrada.</div>';
                }
            })
            .catch(error => {
                console.error('Error al obtener la letra:', error);
                lyricsContainer.innerHTML = '<div class="error">Error al obtener la letra. Por favor, intenta de nuevo más tarde.</div>';
            });

        function loadLyric(index) {
            const selectedLyricContainer = document.getElementById('selected-lyric');
            const selectedLyric = data.lyrics[index];

            if (selectedLyric && selectedLyric.lyric) {
                selectedLyricContainer.innerHTML = `<pre>${selectedLyric.lyric}</pre>`;
            } else {
                selectedLyricContainer.innerHTML = '<div class="error">Letra no disponible.</div>';
            }
        }
    </script>
</body>
</html>
