<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    /**
	* Función que muestra la vista de logados o la vista con el formulario de Login
	*/
	public function index()
	{
	    // Comprobamos si el usuario ya está logado
	    if (Auth::check()) {

	        // Si está logado le mostramos la vista de logados
	        return view('music.show');
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

	    // Comprobamos que el email y la contraseña han sido introducidos
	    $request->validate([
	        'email' => 'required',
	        'password' => 'required',
	    ]);

	    // Almacenamos las credenciales de email y contraseña
	    $credentials = $request->only('email');//chequear esto
        
        echo 'email';
        echo 'password';
	    // Si el usuario existe lo logamos y lo llevamos a la vista de "logados" con un mensaje
	    if (Auth::attempt($credentials)) {
            echo "se autentico correctamente";
	        return redirect()->intended('music.show')
	            ->withSuccess('Logueado Correctamente');
	    }

	    // Si el usuario no existe devolvemos al usuario al formulario de login con un mensaje de error
	    return redirect("/login")->withSuccess('Los datos introducidos no son correctos');
	}

	/**
	* Función que muestra la vista de logados si el usuario está logado y si no le devuelve al formulario de login
	* con un mensaje de error
	*/
	public function logados()
	{
	    if (Auth::check()) {
	        return view('music.show');
	    }

	    return redirect("/login")->withSuccess('No tienes acceso, por favor inicia sesión');
    }
}

