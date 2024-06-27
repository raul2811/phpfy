@extends('layouts/app')

@section('title', 'Lista de Música')

@section('content')
    <div class="bg-gray-900 text-white min-h-screen w-screen p-6">
        <h1 class="text-4xl font-bold mb-8">Lista de Música</h1>
        <ul class="space-y-4">
            @foreach($musics as $music)
                <li class="flex items-center space-x-4 bg-gray-800 p-4 rounded-lg hover:bg-gray-700 transition duration-300">
                    <a href="{{ url('/musics', $music->_id) }}" class="flex items-center space-x-4">
                        @if($music->cover_image)
                            <img src="data:image/jpeg;base64,{{ $music->cover_image }}" alt="{{ $music->title }}" class="w-16 h-16 rounded-md">
                        @endif
                        <div>
                            <p class="text-xl font-semibold">{{ $music->title }}</p>
                            <p class="text-sm text-gray-400">{{ $music->artist }}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
