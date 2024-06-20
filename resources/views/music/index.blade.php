<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Música</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 20px auto;
            max-width: 800px;
        }
        li {
            display: flex;
            align-items: center;
            background-color: #1c1c1c;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        li:hover {
            background-color: #282828;
        }
        a {
            text-decoration: none;
            color: #1db954;
            flex-grow: 1;
            display: flex;
            align-items: center;
        }
        img {
            border-radius: 4px;
            margin-right: 15px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
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
</body>
</html>
