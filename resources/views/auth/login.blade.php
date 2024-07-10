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
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    .slide-in {
        animation: slideIn 0.5s ease-in-out;
    }
    .slide-up {
        animation: slideUp 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    @keyframes slideIn {
        from {
            transform: translateY(20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    @keyframes slideUp {
        from {
            transform: translateY(100px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    .input-border {
        transition: width 0.3s ease-in-out;
    }
    .input-border.focused {
        width: 100%;
    }
    .bg-animate {
        background: linear-gradient(-45deg, #4b28a4, #df5bf1, #4b28a4, #df5bf1);
        background-size: 400% 400%;
        animation: gradientBackground 15s ease infinite;
    }
    @keyframes gradientBackground {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    .glow {
        transition: box-shadow 0.3s ease-in-out;
    }
    .glow:focus {
        box-shadow: 0 0 8px 2px rgba(223, 91, 241, 0.8);
    }
    .pulse {
        animation: pulse 1s infinite;
    }
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
</style>

@if(session('success'))
    <h1 class="text-center text-green-500">{{ session('success') }}</h1>
@endif
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite('resources/css/app.css')
<main class="login-form bg-animate min-h-screen flex flex-col items-center justify-center">
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-gray-900 bg-opacity-60 text-white p-8 rounded-xl shadow-2xl slide-up">
                    <div class="text-center mb-8">
                        <h2 class="text-4xl font-extrabold text-white">
                            Echo<span class="gradient-text">Music</span>
                        </h2>
                        <h3 id="formTitle" class="text-2xl font-bold text-white mt-2 py-2">Iniciar Sesión</h3>
                    </div>
                    <div class="min-h-[400px]"> 
                        <div id="loginForm" class="fade-in">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-4 relative">
                                    <input type="text" placeholder="Email" id="email" class="w-full p-3 bg-transparent text-white placeholder-gray-400 focus:outline-none glow" name="email" required autofocus>
                                    <div class="absolute bottom-0 left-0 w-0 h-px bg-white input-border"></div>
                                    @if ($errors->has('email'))
                                    <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="mb-4 relative">
                                    <input type="password" placeholder="Contraseña" id="password" class="w-full p-3 bg-transparent text-white placeholder-gray-400 focus:outline-none glow" name="password" required>
                                    <div class="absolute bottom-0 left-0 w-0 h-px bg-white input-border"></div>
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
                                <button id="showRegisterBtn" class="w-full py-2 px-4 mb-2 bg-transparent hover:bg-gray-700 text-white font-bold rounded-lg transition duration-300 border border-white flex items-center justify-center">
                                    <span class="flex-grow text-center">Registrarte</span>
                                </button>
                            </div>
                        </div>
                        <form id="registerForm" class="hidden fade-in" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-4 relative">
                            <input type="text" placeholder="Email" id="register-email" class="w-full p-3 bg-transparent text-white placeholder-gray-400 focus:outline-none glow" name="email" required>
                            <div class="absolute bottom-0 left-0 w-0 h-px bg-white input-border"></div>
                        </div>
                        <div class="mb-4 relative">
                            <input type="password" placeholder="Contraseña" id="register-password" class="w-full p-3 bg-transparent text-white placeholder-gray-400 focus:outline-none glow" name="password" required>
                            <div class="absolute bottom-0 left-0 w-0 h-px bg-white input-border"></div>
                            <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer" id="toggleRegisterPassword">
                                <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M15 12l-3 3-3-3m0 0l3-3 3 3m-6 0h12" />
                                </svg>
                            </span>
                        </div>
                        <div class="mb-4 pt-9">
                            <button type="submit" id="registerBtn" class="w-full py-3 px-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold rounded-lg transition duration-300 hover:shadow-lg opacity-50">Registrarte</button>
                        </div>
                    </form>
                    <div class="text-center mt-6">
                        <p class="text-white mb-4">o</p>
                        <button id="showLoginBtn" class="w-full py-2 px-4 mb-2 bg-transparent hover:bg-gray-700 text-white font-bold rounded-lg transition duration-300 border border-white flex items-center justify-center">
                            <span class="flex-grow text-center">Iniciar Sesión</span>
                        </button>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function togglePasswordVisibility(inputId, iconId) {
        var passwordInput = $(inputId);
        var passwordIcon = $(iconId + ' svg');
        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            passwordIcon.html('<path d="M6 18L18 6M6 6l12 12"/>');
        } else {
            passwordInput.attr('type', 'password');
            passwordIcon.html('<path d="M15 12l-3 3-3-3m0 0l3-3 3 3m-6 0h12"/>');
        }
    }

    $(document).ready(function() {
        $('#togglePassword').on('click', function() {
            togglePasswordVisibility('#password', '#togglePassword');
        });

        $('#toggleRegisterPassword').on('click', function() {
            togglePasswordVisibility('#register-password', '#toggleRegisterPassword');
        });

        $('input').on('input', function() {
            if ($('#email').val() && $('#password').val()) {
                $('#submitBtn').removeClass('opacity-50');
            } else {
                $('#submitBtn').addClass('opacity-50');
            }
        });

        $('#showRegisterBtn').on('click', function() {
            $('#loginForm').hide().removeClass('fade-in');
            $('#registerForm').show().addClass('fade-in');
            $('#formTitle').text('Registrarte');
        });

        $('#showLoginBtn').on('click', function() {
            $('#registerForm').hide().removeClass('fade-in');
            $('#loginForm').show().addClass('fade-in');
            $('#formTitle').text('Iniciar Sesión');
        });

        $('#register-email, #register-password').on('input', function() {
            if ($('#register-email').val() && $('#register-password').val()) {
                $('#registerBtn').removeClass('opacity-50');
            } else {
                $('#registerBtn').addClass('opacity-50');
            }
        });

        $('input').on('focus', function() {
            $(this).siblings('.input-border').addClass('focused');
        });

        $('input').on('blur', function() {
            $(this).siblings('.input-border').removeClass('focused');
        });
    });
</script>
@endsection
