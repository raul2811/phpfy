<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<footer class="bg-gray-800 text-white py-2 px-6 fixed bottom-0 w-full flex flex-col items-center">
    <div class="w-full max-w-4xl flex items-center justify-between">
        <div class="current-song text-sm font-semibold gradient-text">
        <span id="song_title">Selecciona una canción</span> 
        </div>
        <div class="player-controls flex items-center space-x-2">
            <button id="prevButton" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </button>
            <button id="playButton" class="bg-gradient-to-r from-purple-600 to-pink-500 text-white rounded-full p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
            <button id="nextButton" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
            </button>
        </div>
        <div class="volume-control flex items-center space-x-2">
            <input type="range" id="volumeControl" min="0" max="100" value="50" class="w-24">
        </div>
    </div>
    <div class="w-full max-w-4xl mt-1">
        <div class="flex items-center justify-between text-xs">
            <span id="currentTime">0:00</span>
            <span id="duration">0:00</span>
        </div>
        <div class="w-full bg-gray-600 rounded-full h-1 mt-0.5">
            <div id="progressBar" class="bg-gradient-to-r from-purple-600 to-pink-500 h-1 rounded-full" style="width: 0%"></div>
        </div>
    </div>
<!-- Aquí se añade el elemento de audio -->
<audio id="audioPlayer" preload="false">
    <source id="audioSource" src="{{ url($music->file_path) }}" type="audio/flac">
    Tu navegador no soporta este elemento.
</audio>
<script>
$(document).ready(function() {
    const audio = document.getElementById('audioPlayer');
    let isPlaying = false;

    // Función para reproducir/pausar el audio
    function playPause() {
        if (isPlaying) {
            audio.pause();
        } else {
            audio.play();
        }
        isPlaying = !isPlaying;
    }

    // Evento clic en el botón de reproducción principal
    $('#playButton').click(function() {
        playPause();
    });

    // Evento clic en los botones de reproducción individuales
    $('.playButton').click(function() {
        const title = $(this).data('title'); // Obtener el título de la canción
        const src = $(this).data('src'); // Obtener la URL del archivo de audio

        // Actualizar la fuente y título del audio
        $('#audioSource').attr('src', src);
        $('#song_title').text(title);

        // Reiniciar la reproducción si ya está en curso
        if (isPlaying) {
            audio.pause();
            audio.load(); // Reiniciar la carga para actualizar la fuente
            audio.play();
        } else {
            audio.load(); // Cargar la nueva fuente
        }
        isPlaying = true;
    });

    // Evento cuando se carga la información del audio
    audio.addEventListener('loadedmetadata', function() {
        const song_title = audio.title;
        $('#song_title').text(song_title);
    });

    // Evento de actualización del tiempo de reproducción
    audio.addEventListener('timeupdate', function() {
        const currentTime = formatTime(audio.currentTime);
        const duration = formatTime(audio.duration);
        const progressPercent = (audio.currentTime / audio.duration) * 100;
        $('#currentTime').text(currentTime);
        $('#duration').text(duration);
        $('#progressBar').css('width', progressPercent + '%');
    });

    // Evento para controlar el volumen del audio
    $('#volumeControl').on('input', function() {
        audio.volume = this.value / 100;
    });

    // Función para formatear el tiempo de reproducción
    function formatTime(seconds) {
        const minutes = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60);
        return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
    }
});
</script>
