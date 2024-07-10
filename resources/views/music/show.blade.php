@extends('layouts.app')

@section('title', $music->title)
@section('content')

<div class="w-full p-8 bg-black absolute top-0 left-0 h-full overflow-y-auto z-10">
    <div class="music-details mb-8">
        <h1 class="text-4xl font-bold mb-4 text-white">{{ $music->title }}</h1>
        <hr class="my-8 border-gray-300">
        <div class="mt-6 flex justify-center"> 
            @if($music->cover_image)
                <img src="data:image/jpeg;base64,{{ $music->cover_image }}" alt="{{ $music->title }}" class="cover-image w-64 h-64 rounded-lg shadow-lg">
            @endif
        </div>
        <hr class="my-8 border-gray-300">
        <div class="text-lg text-white text-center mb-4"> 
            <p class="mb-2">Artista: <span class="text-gray-400">{{ $music->artist }}</span></p>
            <p class="mb-2">Álbum: <span class="text-gray-400">{{ $music->album }}</span></p>
            <p class="mb-2">Género: <span class="text-gray-400">{{ $music->genre }}</span></p>
            <p class="mb-2">Año: <span class="text-gray-400">{{ $music->year }}</span></p>
            <p class="mb-2">Duración: <span class="text-gray-400">{{ $music->duration }}</span></p>
        </div>
        <hr class="my-8 border-gray-300">
        
    </div>
</div>
@endsection
