<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>phpfy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white font-sans">
    <div class="flex flex-col h-screen">
        <!-- Navbar -->
        <nav class="flex items-center justify-between p-4 bg-gray-800">
            <div>
                <span class="text-lg font-bold">phpfy</span>
            </div>
            <div>
                <a href="#" class="text-gray-300 hover:text-white">Premium</a>
                <a href="#" class="ml-4 text-gray-300 hover:text-white">Ayuda</a>
            </div>
        </nav>
        <!-- Hero Section -->
        <div class="flex-1 flex flex-col justify-center items-center">
            <h1 class="text-4xl font-bold mb-4">Escucha la música que te gusta</h1>
            <p class="text-lg mb-8">Descubre canciones, álbumes y playlists personalizadas solo para ti.</p>
            <a href="/login" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Comienza ahora</a>
        </div>
        <!-- Footer -->
        <footer class="p-4 bg-gray-800 text-center">
            <p class="text-gray-300">© 2024 phpfy</p>
        </footer>
    </div>
</body>
</html>
