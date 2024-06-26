<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Index</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <script src='main.js'></script>
    
    @vite('resources/css/app.css')
</head>

<<body>
    @include('components.navbar')  
    <div class="font-inter text-custom-azulito text-center text-5xl font-bold my-8 pt-9">
        Descubre la música más reciente
    </div>
    <div class="font-inter text-center text-lg my-8">
        Escucha las tendencias, la música más escuchada y los artistas más escuchados. Explora un mundo de creatividad.
    </div>
    <div class="flex justify-center px-4 my-8">
        <div class="flex gap-4">
          <a href="#" class="flex justify-center items-center bg-custom-azulito text-white border border-custom-azulito px-7 py-2 rounded-full w-48 h-12 hover:bg-white hover:text-custom-azulito">Explorar Ahora</a>
          <a href="#" class="flex justify-center items-center bg-white text-custom-azulito border border-custom-azulito px-7 py-2 rounded-full w-48 h-12 hover:bg-custom-azulito hover:text-white">Prueba Gratis</a>
        </div>
    </div>
</body>