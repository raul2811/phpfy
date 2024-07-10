<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Index</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Estilo de gradiente que se esta utilizando -->
    <style>
        .gradient-text {
            background: -webkit-linear-gradient(90deg, #4b28a4, #df5bf1);
            background: linear-gradient(90deg, #4b28a4, #df5bf1);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }


        .feature-animation {
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            transition: all 0.3s ease;
        }

        .feature-animation:hover {
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0) 70%);
            transform: scale(1.05);
        }


        .slide-in {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .slide-in.active {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

            .fade-in-up {
                opacity: 0;
                animation: fadeInUp 0.6s ease-out forwards;
            }

            .fade-in-up:nth-child(1) { animation-delay: 0.1s; }
            .fade-in-up:nth-child(2) { animation-delay: 0.2s; }
            .fade-in-up:nth-child(3) { animation-delay: 0.3s; }
            .fade-in-up:nth-child(4) { animation-delay: 0.4s; }
            .fade-in-up:nth-child(5) { animation-delay: 0.5s; }
            .fade-in-up:nth-child(6) { animation-delay: 0.6s; }
            .fade-in-up:nth-child(7) { animation-delay: 0.7s; }
            .fade-in-up:nth-child(8) { animation-delay: 0.8s; }
            .fade-in-up:nth-child(9) { animation-delay: 0.9s; }

            @keyframes pulse {
                0% {
                    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
                }
                70% {
                    box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
                }
                100% {
                    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
                }
            }

        .pulse-button {
            animation: pulse 2s infinite;
        }

        .faq-carousel {
            position: relative;
            overflow: hidden;
        }

        .faq-slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .faq-group {
            flex: 0 0 100%;
}
</style>


</head>
<body class="bg-black">

    <!-- En este parte se llama al componente navbar que ya fue prehecho -->
    @include('components.navbar')

    <!-- En este parte se hace un flex box para tener en la misma caja el titular y la cuadricula -->
    <div class="container mx-auto px-4 py-36 flex flex-col lg:flex-row items-center justify-between feature-container slide-in"">
        <div class="lg:w-1/2 lg:pr-8 mb-8 lg:mb-0">
            <span class="text-left text-xl font-semibold text-white mb-2 block">Musica para <span class="gradient-text">todos </span></span>
            <h1 class="text-left text-3xl font-bold leading-tight tracking-tighter md:text-5xl lg:leading-none font-inter text-white mb-6">
                <span class="block mb-2">Explora los <span class="gradient-text">hits </span> de hoy,</span>
                <span class="block">anticipa los <span class="gradient-text">clásicos </span> del <span class="gradient-text">mañana</span></span>
            </h1>
            <h2 class="font-inter text-left text-xl mb-8 text-gray-500">
                Escucha las tendencias, la música más escuchada y los artistas más escuchados. Explora un mundo de creatividad.
            </h2>
            <div class="flex flex-col sm:flex-row gap-4">
                <button class="text-white px-7 py-2 rounded-full w-full sm:w-48 h-12 border border-white hover:bg-gray-700 transition duration-300">Explorar Ahora</button>
                <button class="text-white px-7 py-2 rounded-full w-full sm:w-48 h-12 bg-gradient-to-r from-purple-600 to-pink-500 hover:from-purple-700 hover:to-pink-600 transition duration-300 pulse-button">Prueba Gratis</button>
            </div>
        </div>

        <div class="lg:w-1/2">
            <div class="grid grid-cols-3 gap-2">
                <img src="{{ asset('images/beatles.jpg') }}" alt="Beatles" class="w-full h-auto object-cover rounded-lg fade-in-up">
                <img src="{{ asset('images/beatles.jpg') }}" alt="Beatles" class="w-full h-auto object-cover rounded-lg fade-in-up">
                <img src="{{ asset('images/beatles.jpg') }}" alt="Beatles" class="w-full h-auto object-cover rounded-lg fade-in-up">

                <img src="{{ asset('images/beatles.jpg') }}" alt="Beatles" class="w-full h-auto object-cover rounded-lg fade-in-up">
                <img src="{{ asset('images/beatles.jpg') }}" alt="Beatles" class="w-full h-auto object-cover rounded-lg fade-in-up">
                <img src="{{ asset('images/beatles.jpg') }}" alt="Beatles" class="w-full h-auto object-cover rounded-lg fade-in-up">

                <img src="{{ asset('images/beatles.jpg') }}" alt="Beatles" class="w-full h-auto object-cover rounded-lg fade-in-up">
                <img src="{{ asset('images/beatles.jpg') }}" alt="Beatles" class="w-full h-auto object-cover rounded-lg fade-in-up">
                <img src="{{ asset('images/beatles.jpg') }}" alt="Beatles" class="w-full h-auto object-cover rounded-lg fade-in-up">
            </div>
        </div>
    </div>

    <!-- En esta parte tenemos el preámbulo del próximo contenedor -->
    <div class="w-full">
        <div class="mx-auto text-center py-8">
            <div class="lg:mx-auto mb-8 lg:mb-0">
                <h1 class="text-center text-3xl font-bold leading-tight tracking-tighter md:text-5xl lg:leading-none font-inter text-white mb-6">
                    <span class="block mb-2">Experiencias <span class="gradient-text">musicales </span> sin límites</span>
                </h1>
                <p class="text-center text-xl text-gray-400 mt-4">
                    Personaliza, comparte y explora: tu música, a tu manera
                </p> 
            </div>
        </div>
    </div>

    <!-- Grid de funcionalidades 1x3 -->
    <div class="w-full px-20 py-8">
        <div class="max-w-9xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="feature-grid flex flex-col sm:flex-row gap-8">

                <!-- Funcionalidad 1: Personalización -->
                <div class="feature-animation flex-1 rounded-lg border border-red-200 py-32 flex flex-col items-center text-center" style="border-color: rgba(255, 0, 0, 0.2);">
                    <div class="feature-icon" style="background: rgba(255, 0, 0, 0.2);">
                        <img src="{{ asset('images/bomba.svg') }}" alt="Personalización" class="w-12 h-12">
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Personalización</h3>
                    <p class="text-gray-300">Crea listas únicas adaptadas a tus gustos.</p>
                </div>

                <!-- Funcionalidad 2: Compartir -->
                <div class="feature-animation flex-1 rounded-lg border border-yellow-200 py-32 flex flex-col items-center text-center" style="border-color: rgba(255, 255, 0, 0.2);">
                    <div class="feature-icon" style="background: rgba(255, 255, 0, 0.2);">
                        <img src="{{ asset('images/wifi.svg') }}" alt="Compartir" class="w-12 h-12">
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Compartir</h3>
                    <p class="text-gray-300">Comparte música y descubre nuevos artistas.</p>
                </div>

                <!-- Funcionalidad 3: Exploración -->
                <div class="feature-animation flex-1 rounded-lg border border-cyan-200 py-32 flex flex-col items-center text-center" style="border-color: rgba(0, 255, 255, 0.2);">
                    <div class="feature-icon" style="background: rgba(0, 255, 255, 0.2);">
                        <img src="{{ asset('images/music.svg') }}" alt="Exploración" class="w-12 h-12">
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Exploración</h3>
                    <p class="text-gray-300">Descubre nueva música según tus preferencias.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenedor de descubrimiento musical -->
    <div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row items-center justify-between feature-container slide-in ">
        <div class="lg:w-1/2 lg:pr-8 mb-8 lg:mb-0">
            <span class="text-left text-xl font-semibold text-white mb-2 block">Descubrir y escuchar <span class="gradient-text">música</span></span>
            <h1 class="text-left text-3xl font-bold leading-tight tracking-tighter md:text-5xl lg:leading-none font-inter text-white mb-6">
                Música de <span class="gradient-text">moda</span>
            </h1>
            <h2 class="font-inter text-left text-xl mb-8 text-gray-500">
                Explora las pistas de música y listas de reproducción más recientes y populares
            </h2>
            <!-- Lista de elementos -->
            <ul class="list-none text-gray-500 mb-8 text-left ml-8">
                <!-- Agrega margen izquierdo aquí -->
                <li class="mb-4 text-lg">
                    <div><strong>1. Tendencias de ahora</strong><br>Mantente al día con las tendencias musicales y descubre nuevos artistas.</div>
                </li>
                <li class="mb-4 text-lg">
                    <div><strong>2. Lista de éxitos</strong><br>Escucha las canciones más reproducidas en varios géneros.</div>
                </li>
                <li class="mb-4 text-lg">
                    <div><strong>3. Reproductor web de alta calidad</strong><br>Déjate envolver por la calidad sonora que logramos emitir.</div>
                </li>
            </ul>
        </div>

        <div class="lg:w-1/2 flex justify-center items-center">
            <img src="{{ asset('images/amarillo.jpg') }}" alt="Beatles" class="w-full h-full object-cover rounded-lg">
        </div>
    </div>

    <!-- En esta parte tenemos el preámbulo del próximo contenedor -->
    <div class="w-full">
        <div class="mx-auto text-center py-8">
            <div class="lg:mx-auto mb-8 lg:mb-0">
                <h1 class="text-center text-3xl font-bold leading-tight tracking-tighter md:text-5xl lg:leading-none font-inter text-white mb-6">
                    <span class="block mb-2">Elige tu plan <span class="gradient-text">musical</span> ideal</span>
                </h1>
                <p class="text-center text-xl text-gray-400 mt-4">
                    Descubre el plan perfecto para tu experiencia musical única
                </p>
            </div>
        </div>
    </div>

    <!-- Botón para cambiar entre mensual y anual -->
    <div class="w-full text-center py-8">
        <button id="togglePlans" class="text-white px-7 py-2 rounded-full border border-white hover:bg-gray-700 transition duration-300">
            Cambiar a Planes Anuales
        </button>
    </div>

    <!-- Grid de planes 1x3 -->
    <div class="w-full px-20 py-12">
        <div class="max-w-9xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="feature-grid flex flex-col sm:flex-row gap-8">
                <!-- Plan 1: Básico -->
                <div class="feature-animation  flex-1 rounded-lg border border-white py-20 px-10 flex flex-col items-center text-center">
                    <h4 class="plan-duration text-sm font-semibold text-gray-400 uppercase mb-2">Mensual</h4>
                    <h3 class="plan-price text-3xl font-bold text-white mb-2">Gratuito</h3>
                    <p class="text-gray-300 mb-4">Comienza tu viaje musical</p>
                    <div class="w-16 h-px bg-white mb-6"></div>
                    <ul class="text-left text-gray-300 space-y-2">
                        <li>• Acceso a catálogo básico</li>
                        <li>• Reproducción con anuncios</li>
                        <li>• Calidad de audio estándar</li>
                        <li>• Sin modo offline</li>
                    </ul>
                </div>

                <!-- Plan 2: Profesional -->
                <div class="feature-animation  flex-1 rounded-lg border border-white py-20 px-10 flex flex-col items-center text-center">
                    <h4 class="plan-duration text-sm font-semibold text-gray-400 uppercase mb-2">Mensual</h4>
                    <h3 class="plan-price text-3xl font-bold text-white mb-2">$6.20 al mes</h3>
                    <p class="text-gray-300 mb-4">Eleva tu experiencia musical</p>
                    <div class="w-16 h-px bg-white mb-6"></div>
                    <ul class="text-left text-gray-300 space-y-2">
                        <li>• Catálogo completo</li>
                        <li>• Sin anuncios</li>
                        <li>• Calidad de audio alta</li>
                        <li>• Modo offline disponible</li>
                    </ul>
                </div>

                <!-- Plan 3: Familiar -->
                <div class="feature-animation  flex-1 rounded-lg border border-white py-20 px-10 flex flex-col items-center text-center">
                    <h4 class="plan-duration text-sm font-semibold text-gray-400 uppercase mb-2">Mensual</h4>
                    <h3 class="plan-price text-3xl font-bold text-white mb-2">$12.50 al mes</h3>
                    <p class="text-gray-300 mb-4">Música para toda la familia</p>
                    <div class="w-16 h-px bg-white mb-6"></div>
                    <ul class="text-left text-gray-300 space-y-2">
                        <li>• Hasta 6 cuentas</li>
                        <li>• Todo lo del plan Profesional</li>
                        <li>• Control parental</li>
                        <li>• Playlists familiares</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full feature-container slide-in2">
    <div class="mx-auto text-center py-8 pb-2"> 
        <div class="lg:mx-auto mb-8 lg:mb-0">
            <h1 class="text-center text-3xl font-bold leading-tight tracking-tighter md:text-5xl lg:leading-none font-inter text-white mb-6">
                <span class="block mb-2">Preguntas <span class="gradient-text">Frecuentes </span> que podemos responder</span>
            </h1>
            <p class="text-center text-xl text-gray-400 mt-4">
                Esta es una recopilacion de preguntas hechas por nuestros usuarios
            </p> 
        </div>
    </div>
</div>

   <!-- Sección de Preguntas Frecuentes -->
    <div class="w-full bg-black py-8 feature-container slide-in">
        <div class="container mx-auto px-4">
            <div class="faq-carousel overflow-hidden">
                <div class="faq-slider flex transition-transform duration-500 ease-in-out">
                    <!-- Grupo 1 -->
                    <div class="faq-group flex-shrink-0 w-full grid grid-cols-3 gap-4">
                        <div class="bg-transparent border border-white rounded-lg p-6">
                            <h3 class="text-white font-semibold mb-2">¿Cómo funciona el plan familiar?</h3>
                            <p class="text-gray-300">El plan familiar permite hasta 6 cuentas individuales con todas las ventajas del plan premium.</p>
                        </div>
                        <div class="bg-transparent border border-white rounded-lg p-6">
                            <h3 class="text-white font-semibold mb-2">¿Puedo cancelar mi suscripción en cualquier momento?</h3>
                            <p class="text-gray-300">Sí, puedes cancelar tu suscripción en cualquier momento sin penalización.</p>
                        </div>
                        <div class="bg-transparent border border-white rounded-lg p-6">
                            <h3 class="text-white font-semibold mb-2">¿Qué calidad de audio ofrecen?</h3>
                            <p class="text-gray-300">Ofrecemos calidad de audio de hasta 320kbps en planes premium.</p>
                        </div>
                    </div>
                    <!-- Grupo 2 -->
                    <div class="faq-group flex-shrink-0 w-full grid grid-cols-3 gap-4">
                        <div class="bg-transparent border border-white rounded-lg p-6">
                            <h3 class="text-white font-semibold mb-2">¿Estan presentes canciones antiguas?</h3>
                            <p class="text-gray-300">Si tenemos una amplia cantidad de musica de todos los estilos y generos.</p>
                        </div>
                        <div class="bg-transparent border border-white rounded-lg p-6">
                            <h3 class="text-white font-semibold mb-2">¿Funciona offline?</h3>
                            <p class="text-gray-300">Sí, los usuarios premium pueden descargar música para escuchar sin conexión.</p>
                        </div>
                        <div class="bg-transparent border border-white rounded-lg p-6">
                            <h3 class="text-white font-semibold mb-2">¿Cuántas canciones tiene su catálogo?</h3>
                            <p class="text-gray-300">Nos encontramos en constante ampliacion de catalogo.</p>
                        </div>
                    </div>
                    <!-- Grupo 3 -->
                    <div class="faq-group flex-shrink-0 w-full grid grid-cols-3 gap-4">
                        <div class="bg-transparent border border-white rounded-lg p-6">
                            <h3 class="text-white font-semibold mb-2">¿Tienen podcasts?</h3>
                            <p class="text-gray-300">Sí, ofrecemos una amplia variedad de podcasts en diferentes categorías.</p>
                        </div>
                        <div class="bg-transparent border border-white rounded-lg p-6">
                            <h3 class="text-white font-semibold mb-2">¿Cómo funciona la recomendación de música?</h3>
                            <p class="text-gray-300">Utilizamos algoritmos avanzados para recomendar música basada en tus gustos y hábitos de escucha.</p>
                        </div>
                        <div class="bg-transparent border border-white rounded-lg p-6">
                            <h3 class="text-white font-semibold mb-2">¿Puedo usar la misma cuenta en varios dispositivos?</h3>
                            <p class="text-gray-300">Sí, puedes usar tu cuenta en múltiples dispositivos, pero solo puedes reproducir en uno a la vez con una cuenta individual.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-8 space-x-4">
                <button id="prevFAQ" class="bg-transparent text-white px-6 py-2 rounded-full border border-white hover:bg-white hover:text-purple-900 transition duration-300">Anterior</button>
                <button id="nextFAQ" class="bg-transparent text-white px-6 py-2 rounded-full border border-white hover:bg-white hover:text-purple-900 transition duration-300">Siguiente</button>
            </div>
        </div>
    </div>

<-! Script de cambio de planes >
<script>
    $('#togglePlans').on('click', function() {
        var durationElements = $('.plan-duration');
        var priceElements = $('.plan-price');
        var isMonthly = durationElements.first().text().trim() === 'Mensual';

        if (isMonthly) {
            durationElements.each(function() { $(this).text('Anual'); });
            priceElements.each(function(index) {
                if (index === 0) $(this).text('Gratuito');
                if (index === 1) $(this).text('$60 al año'); 
                if (index === 2) $(this).text('$120 al año'); 
            });
            $(this).text('Cambiar a Planes Mensuales');
            } else {
                durationElements.each(function() { $(this).text('Mensual'); });
                priceElements.each(function(index) {
                    if (index === 0) $(this).text('Gratuito');
                    if (index === 1) $(this).text('$6.20 al mes');
                    if (index === 2) $(this).text('$12.50 al mes');
                });
                $(this).text('Cambiar a Planes Anuales');
                
            }
        });
</script>

<-! Primera animacion integrada >
 <script>
    $(document).ready(function() {
    function checkSlide() {
        $('.slide-in').each(function() {
            const slideInAt = ($(window).scrollTop() + $(window).height()) - $(this).height() / 8;
            const elementBottom = $(this).offset().top + $(this).height();
            const isHalfShown = slideInAt > $(this).offset().top;
            const isNotScrolledPast = $(window).scrollTop() < elementBottom;
            
            if (isHalfShown && isNotScrolledPast) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });
    }

    $(window).on('scroll', checkSlide);
    $(window).on('resize', checkSlide);

    checkSlide();
});

</script>

<!-! Segunda animacion integrada >
<script>
$(document).ready(function() {
    const $slider = $('.faq-slider');
    const $groups = $('.faq-group');
    const groupWidth = $groups.outerWidth(true);
    let currentIndex = 0;

    $slider.append($groups.clone());

    function moveSlider(direction) {
        currentIndex += direction;
        const totalGroups = $groups.length;

        if (currentIndex < 0) {
            currentIndex = totalGroups - 1;
            $slider.css('transform', `translateX(-${totalGroups * groupWidth}px)`);
            $slider.css('transition', 'none');
            setTimeout(() => {
                $slider.css('transition', 'transform 0.5s ease-in-out');
                $slider.css('transform', `translateX(-${currentIndex * groupWidth}px)`);
            }, 50);
        } else if (currentIndex >= totalGroups) {
            currentIndex = 0;
            $slider.css('transform', `translateX(-${currentIndex * groupWidth}px)`);
            $slider.css('transition', 'none');
            setTimeout(() => {
                $slider.css('transition', 'transform 0.5s ease-in-out');
                $slider.css('transform', 'translateX(0)');
            }, 50);
        } else {
            $slider.css('transform', `translateX(-${currentIndex * groupWidth}px)`);
        }
    }

    $('#nextFAQ').on('click', function() {
        moveSlider(1);
    });

    $('#prevFAQ').on('click', function() {
        moveSlider(-1);
    });

    setInterval(() => moveSlider(1), 5000);
});
</script>

@include('components.footer')

</body>

</html>
