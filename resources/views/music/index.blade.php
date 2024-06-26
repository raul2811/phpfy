@extends('layouts/app')

@section('title', 'Lista de Música')

@section('content')
    <h1>Lista de Música</h1>
    <ul>
        @foreach($musics as $music)
            <li>
                <a href="{{ url('/musics', $music->_id) }}">
                    @if($music->cover_image)
                        <img src="data:image/jpeg;base64,{{ $music->cover_image }}" alt="{{ $music->title }}" style="width:50px;height:50px;">
                    @endif
                    {{ $music->title }}
                </a>
                <span>- {{ $music->artist }}</span>
            </li>
        @endforeach
    </ul>
@endsection
