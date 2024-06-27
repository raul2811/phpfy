@extends('layouts.auth')

@section('content')
    @if(session('success'))
        <h1 class="text-center text-green-500">{{ session('success') }}</h1>
    @endif

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <main class="login-form bg-gray-900 min-h-screen flex items-center justify-center">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="w-full max-w-md">
                    <div class="bg-gray-800 text-white p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-center mb-6">Formulario Login</h3>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="mb-4">
                                    <div class="alert alert-danger">
                                        <ul class="list-none p-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-4">
                                    <input type="text" placeholder="Email" id="email" class="form-control w-full p-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:border-green-500" name="email" required autofocus>
                                    @error('email')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <input type="password" placeholder="Password" id="password" class="form-control w-full p-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:border-green-500" name="password" required>
                                    @error('password')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <div class="flex items-center">
                                        <input type="checkbox" name="remember" class="mr-2">
                                        <label class="text-sm">Recuérdame</label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="w-full py-2 px-4 bg-green-500 hover:bg-green-600 text-white font-bold rounded-lg transition duration-300">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
