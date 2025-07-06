<?php

namespace App\Http\Controllers;
#
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\AuthManager; 
use App\Models\User;

use Illuminate\Http\Request;


class UsuariosController extends Controller
{
        public function viewUsuario($id){
        $usuario = User::findOrFail($id); // Busca el usuario por id
        return view('usuario', ['usuario' => $usuario]); // Retorna la vista blog.blade.php y le pasa la variable usuario
    }

        public function createUsuario(Request $request){
        return view('crearUsuario'); // Retorna la vista crearUsuario.blade.php
    } 

    public function saveDataUsuario(Request $request){
        $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ], 
        [
            'nombre.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo email es obligatorio',
            'password.required' => 'El campo password es obligatorio',
            'password_confirmation.required' => 'El campo password_confirmation es obligatorio',
            'password.confirmed' => 'Las contraseñas no coinciden',
        ]);
        
        $input = $request->all(); 

        $usuario =             new User();
        $usuario->name =     $input['nombre'];
        $usuario->email =      $input['email'];
        $usuario->password =   Hash::make($input['password']);
        $usuario->save();      // Guarda el usuario en la base de datos

        if ((auth()->id()) === 1) { // usuario esta logeado, y por lo tanto es admin
            return redirect()
                ->route('dashboard') 
                ->with ('feedback.message', 'Usuario registrado con éxito'); // Redirige a la vista dashboard.blade.php y le pasa la variable success  
        } else {
            return redirect()
                ->route('login') 
                ->with ('feedback.message', 'Usuario registrado con éxito'); // Redirige a la vista login.blade.php y le pasa la variable success  
        }

        
    }
    
    public function deleteUsuario($id)
    {
        $usuario = User::find($id);

        $usuario->delete();

        return redirect()->route('dashboard')->with('feedback.message', 'Usuario eliminado con éxito.');
    }

    public function editarUsuario($id, Request $request){
        $usuario = User::find($id); // Busca el usuario por id
        return view('editarUsuario', ['usuario' => $usuario]);

    }

public function cargaEditUsuario($id, Request $request){
    $request->validate([
        'nombre' => 'max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'nullable|confirmed',
    ], [
        'nombre.required' => 'El campo nombre es obligatorio',
        'email.required' => 'El campo email es obligatorio',
        'email.unique' => 'El email ya está en uso',
        'password.confirmed' => 'Las contraseñas no coinciden',
    ]);

        $input = $request->all(); 

        $usuario = User::findOrFail($id);
        $usuario->name = $input['nombre'];
        $usuario->email = $input['email'];
        if (!empty($input['password'])) {
            $usuario->password = Hash::make($input['password']);
        }
        $usuario->save(); // Guarda el usuario en la base de datos

        return redirect()
            ->route('dashboard') 
            ->with ('feedback.message', 'Usuario editado con éxito'); // Redirige a la vista blog.blade.php y le pasa la variable success  
        
    }
}
