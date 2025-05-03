<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function viewLogin()
    {
        return view('login');
    }


    public function authenticate(Request $request)
    {
        // aca hay que validar el login


        $credentials = $request->only('email', 'password');// Captura los datos del formulario de login
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()
                ->intended(route('dashboard')) // Redirige a la vista dashboard.blade.php
                ->with('feedback.message', 'Bienvenido al Dashboard'); // Redirige a la vista dashboard.blade.php y le pasa la variable success
        }
        return redirect()
            ->back() // Redirige a la vista login.blade.php
            ->withInput()
            ->with('feedback.message', 'Credenciales incorrectas'); // Redirige a la vista login.blade.php y le pasa la variable success
            
    }


    public function logout(Request $request)
    {
        Auth::logout(); // Cierra la sesión del usuario

        $request->session()->invalidate(); // Invalida la sesión actual
        $request->session()->regenerateToken(); // Regenera el token de la sesión
        
        return redirect()
            ->route('home') // Redirige a la vista home.blade.php
            ->with('feedback.message', 'Has cerrado sesión con éxito'); // Redirige a la vista home.blade.php y le pasa la variable success
    }
}
