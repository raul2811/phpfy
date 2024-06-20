<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Música</title>
</head>
<body>
    <h1>Lista de Música</h1>
    <ul>
        @foreach($musics as $music)
            <li>
                <a href="{{ url('/musics', $music->_id) }}">{{ $music->title }}</a>
                - {{ $music->artist }}
            </li>
        @endforeach
    </ul>
</body>
</html>

