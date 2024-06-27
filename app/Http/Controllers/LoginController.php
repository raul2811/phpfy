<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /**
     * Función que muestra la vista de logados o la vista con el formulario de Login
     */
    public function index()
    {
        // Comprobamos si el usuario ya está logado
        if (session()->has('user')) {
            // Si está logado le mostramos la vista de logados
            return redirect()->route('music.index');
        }

        // Si no está logado le mostramos la vista con el formulario de login
        return view('auth.login');
    }

    /**
     * Función que se encarga de recibir los datos del formulario de login, comprobar que el usuario existe y
     * en caso correcto logar al usuario
     */
    public function login(Request $request)
    {
        // Validar los campos del formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Obtener el email y contraseña del request
        $email = $request->input('email');
        $password = $request->input('password');

        // Buscar el usuario en la base de datos MongoDB por email
        $user = User::where('email', $email)->first();

        // Verificar si se encontró un usuario y si la contraseña es correcta
        if ($user && $user->password === $password) {
            // Autenticación exitosa
            // Inicia sesión manualmente
            session()->put('user', $user);

            // Agregar registro de información
            Log::info('Usuario autenticado correctamente.', ['user_id' => $user->id]);

            // Redirige al usuario a la página de "logados"
            return redirect()->route('music.index')->with('success', 'Logueado Correctamente');
        } else {
            // Autenticación fallida
            // Agregar registro de información
            Log::warning('Intento de login fallido.', ['email' => $email]);

            // Redirige de vuelta al formulario de login con mensaje de error
            return redirect()->back()->withErrors(['loginError' => 'Los datos introducidos no son correctos']);
        }
    }
}
