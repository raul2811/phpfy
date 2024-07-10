@extends('layouts/auth')
@section('content')

    <style>
        .gradient-text {
            background: linear-gradient(90deg, #4b28a4, #df5bf1);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
        }

    </style>

    @if(session('success'))
        <h1 class="text-center text-green-500">{{ session('success') }}</h1>
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    <main class="login-form bg-black min-h-screen flex flex-col items-center justify-center" style="background: linear-gradient(90deg, #000000, #7503a6, #000000);">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="w-full max-w-md">
                    <div class="bg-gray-900 bg-opacity-60 text-white p-8 rounded-xl shadow-2xl">
                        <div class="text-center mb-8">
                            <h2 class="text-4xl font-extrabold text-white">
                                Echo<span class="gradient-text">Music</span>
                            </h2>
                            <h3 class="text-2xl font-bold text-white mt-2">Iniciar Sesión</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-4 relative">
                                    <input type="text" placeholder="Email" id="email" class="form-control w-full p-3 bg-transparent text-white placeholder-gray-400 focus:outline-none" name="email" required autofocus>
                                    <div class="absolute bottom-0 left-0 w-full h-px bg-white"></div>
                                    @if ($errors->has('email'))
                                    <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4 relative">
                                    <input type="password" placeholder="contraseña" id="password" class="form-control w-full p-3 bg-transparent text-white placeholder-gray-400 focus:outline-none" name="password" required>
                                    <div class="absolute bottom-0 left-0 w-full h-px bg-white"></div>
                                    <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer" id="togglePassword">
                                        <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M15 12l-3 3-3-3m0 0l3-3 3 3m-6 0h12" />
                                        </svg>
                                    </span>
                                    @if ($errors->has('password'))
                                    <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <div class="flex items-center">
                                        <input type="checkbox" name="remember" class="mr-2 accent-pink-500">
                                        <label class="text-sm">Recuerdame</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" id="submitBtn" class="w-full py-3 px-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold rounded-lg transition duration-300 hover:shadow-lg opacity-50">Continuar</button>
                                </div>
                            </form>
                            <div class="text-center mt-6">
                                <p class="text-white mb-4">o</p>
                                <button class="w-full py-2 px-4 mb-2 bg-transparent hover:bg-gray-700 text-white font-bold rounded-lg transition duration-300 border border-white flex items-center justify-center">
                                    <span class="flex-grow text-center">Continuar con Google</span>
                                </button>
                                <button class="w-full py-2 px-4 mb-2 bg-transparent hover:bg-gray-700 text-white font-bold rounded-lg transition duration-300 border border-white flex items-center justify-center">
                                    <span class="flex-grow text-center">Continuar con Facebook</span>
                                </button>
                                <button class="w-full py-2 px-4 bg-transparent hover:bg-gray-700 text-white font-bold rounded-lg transition duration-300 border border-white flex items-center justify-center">
                                    <span class="flex-grow text-center">Continuar con Instagram</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = $('#password');
            var passwordIcon = $('#togglePassword svg');
            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text');
                passwordIcon.html('<path d="M6 18L18 6M6 6l12 12"/>');
            } else {
                passwordInput.attr('type', 'password');
                passwordIcon.html('<path d="M15 12l-3 3-3-3m0 0l3-3 3 3m-6 0h12"/>');
            }
        }

        $(document).ready(function() {
            $('#togglePassword').on('click', togglePasswordVisibility);

            $('input').on('input', function() {
                if ($('#email').val() && $('#password').val()) {
                    $('#submitBtn').removeClass('opacity-50');
                } else {
                    $('#submitBtn').addClass('opacity-50');
                }
            });
        });
    </script>
@endsection