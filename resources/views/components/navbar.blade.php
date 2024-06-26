<div class="relative h-screen"> 
    <div class="absolute inset-0 z-0"> 
        <img src="{{ asset('images/beatles.jpg') }}" alt="Fondo" class="w-full h-full object-cover"> <!-- Asegura que la imagen cubra completamente el área -->
    </div>
    
    <nav class="bg-transparent font-inter w-full z-10 relative"> <!-- Nav con posición relativa para estar encima de la imagen -->
        <div class="container mx-auto flex justify-between items-center py-4 px-1">
            <div class="flex space-x-8 items-center">
                <a href="#" class="text-white text-lg">Sobre EchoMusic</a>
                <a href="#" class="text-white text-lg pl-8">Lo más escuchado</a>
            </div>
            <div class="flex space-x-4 items-center">
                <a href="#" class="bg-custom-azulito text-white px-7 py-2 rounded-full hover:bg-white hover:text-custom-azulito">Prueba Gratis</a>
                <a href="#" class="text-white text-lg pl-8">Iniciar sesión</a>
            </div>
        </div>
    </nav>
</div>