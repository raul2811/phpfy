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

<body>
    @include('components.navbar')  
    <div class="font-inter text-custom-azulito text-center text-5xl font-bold my-8 pt-10">
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
    <div class="relative h-screen"> 
        <div class="absolute inset-0 z-0"> 
            <img src="{{ asset('images/beatles.jpg') }}" alt="Fondo" class="w-full h-full object-cover">
        </div>
    </div>

    <div class="mx-auto max-w-screen-2xl px-8 my-8">
    <div class="flex flex-wrap justify-between items-center my-8">
        <div class="w-full md:w-1/2 px-4">
            <div class="text-lg font-inter text-custom-azulito my-4">
                Descubrir y escuchar música
            </div>
            <div class="text-5xl font-bold font-inter text-custom-azulito">
                Música de moda
            </div>
            <div class="text-lg font-inter text-custom-azulito my-4 text-justify">
                Explora las pistas de música y listas de reproducción más recientes y populares.
            </div>
            <div class="my-8">
                <h2 class="text-3xl font-inter text-custom-azulito text-justify pl-4">Tendencias Ahora</h2>
                <p class="text-lg font-inter text-custom-azulito mt-4 text-justify pl-4">Mantente al día con las últimas tendencias musicales y descubre nuevos artistas.</p>
            </div>
            <div class="my-8">
                <h2 class="text-3xl font-inter text-custom-azulito text-justify pl-4">Lista de Éxitos</h2>
                <p class="text-base font-inter text-custom-azulito mt-4 text-justify pl-4">Escucha las canciones más reproducidas en varios géneros.</p>
            </div>
            <div class="my-8">
                <h2 class="text-3xl font-inter text-custom-azulito text-justify pl-4">Reproductor Web de alta calidad</h2>
                <p class="text-base font-inter text-custom-azulito mt-4 text-justify pl-4">Déjate envolver por la calidad sonora que logramos emitir.</p>
            </div>
        </div>

        <div class="w-full md:w-1/2 flex justify-center items-center px-4">
            <img src="{{ asset('images/sunflower.jpg') }}" alt="Sunflower" class="object-cover h-2/3 w-3/3">
        </div>
    </div>
    </div>
</div>
</body>