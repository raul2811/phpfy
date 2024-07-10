@extends('layouts/app')

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

@section('title', 'Lista de Música')

<style>
    .gradient-text {
        background: linear-gradient(90deg, #4b28a4, #df5bf1);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent;
    }
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .hidden {
        display: none;
    }

    #song-details-sidebar {
        position: fixed;
        right: 0;
        top: 0;
        height: calc(100% - 80px); /* Ajustado para dejar espacio al reproductor */
        background-color: #1a202c;
        color: white;
        width: 25%;
        overflow-y: auto;
        z-index: 1050;
        transition: transform 0.3s ease, width 0.3s ease;
        transform: translateX(100%);
    }

    #song-details-sidebar.show {
        transform: translateX(0);
    }

    #close-sidebar {
        position: absolute;
        top: 10px; 
        right: 10px; 
        padding: 5px 10px; 
        cursor: pointer;
        background-color: #000000; 
        color: white; 
        font-size: 16px; 
        z-index: 1100; 
    }

    .main-content {
        transition: margin-right 0.3s ease;
    }

    .main-content.sidebar-open {
        margin-right: 25%;
    }
</style>

<div class="bg-black text-white min-h-screen flex">
    <!-- Barra izquierda (fija) -->
    <div class="w-1/5 p-4 bg-black fixed h-full overflow-y-auto">
        <div class="mb-4"> 
            <h2 class="text-3xl font-bold text-white">
                Echo<span class="gradient-text">Music</span>
            </h2>
            <hr class="my-4 border-gray-700"> 
        </div>
        <!-- Menú  -->
        <h2 class="text-xl font-bold mb-4">Menu</h2> 
        <ul class="space-y-2 pl-4"> 
            <li><a href="#" class="text-lg hover:text-gray-400 transition duration-300">Home</a></li>
        </ul>
        <hr class="my-4 border-gray-700"> 
        <h2 class="text-xl font-bold mb-4">Biblioteca</h2> 
        <ul class="space-y-2 pl-4"> 
            <li><a href="#" class="text-lg hover:text-gray-400 transition duration-300">Canciones</a></li>
            <li><a href="#" class="text-lg hover:text-gray-400 transition duration-300">Albumes</a></li>
        </ul>
    </div>

    <!-- Contenido Principal -->
    <div id="main-content" class="main-content flex-1 ml-[20%] p-6 bg-black min-h-screen overflow-y-auto">
        <h1 class="text-3xl font-bold mb-8">Listo para disfrutar de esta experiencia sonora </h1>
        
        <!-- Barra de búsqueda -->
        <div class="mb-8 max-w-6xl"> 
            <div class="flex items-center">
                <input type="text" placeholder="Buscar música..." class="w-full px-4 h-12 rounded-l-lg bg-gray-300 text-white focus:outline-none">
                <button class="px-6 h-12 bg-purple-600 text-white rounded-r-lg hover:bg-purple-700 focus:outline-none flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
        
        <hr class="my-8 border-gray-300">

        <h2 class="text-2xl font-bold mb-4">Todas las Canciones</h2>
        <div class="mb-8 pb-20">
            <div class="grid grid-cols-5 gap-4">
                @foreach($musics as $music)
                    <div class="bg-transparent p-4 rounded-lg hover:bg-gray-300 transition duration-300">
                        <a href="{{ url('/musics', $music->_id) }}" class="flex flex-col items-center space-y-4">
                            @if($music->cover_image)
                                <img src="data:image/jpeg;base64,{{ $music->cover_image }}" alt="{{ $music->title }}" class="w-full h-40 object-cover rounded-md mb-2">
                            @endif
                            <div>
                                <p class="text-sm font-semibold truncate">{{ $music->title }}</p>
                                <p class="text-xs text-gray-400 truncate">{{ $music->artist }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="song-details-sidebar" class="hidden">
        <button id="close-sidebar" class="close-sidebar-button">X</button>
        <div id="sidebar-content"></div>
    </div>

    
</div>

<script>
    $(document).ready(function() {
        $('.bg-transparent').click(function(e) {
            e.preventDefault();
            var url = $(this).find('a').attr('href');

            $('#song-details-sidebar').removeClass('hidden').addClass('show');
            $('#main-content').addClass('sidebar-open');

            $('#sidebar-content').load(url, function() {
                adjustLayout();
            });
        });

        function adjustLayout() {
            var playerHeight = $('#music-player').outerHeight();
            $('#song-details-sidebar').css({
                'height': 'calc(100% - ' + playerHeight + 'px)',
                'bottom': playerHeight + 'px'
            });
        }

        $(document).on('click', '#close-sidebar', function(e) {
            e.preventDefault();
            $('#song-details-sidebar').addClass('hidden').removeClass('show');
            $('#main-content').removeClass('sidebar-open');
        });
        
        adjustLayout();

        $(window).resize(function() {
            adjustLayout();
        });
    });
</script>