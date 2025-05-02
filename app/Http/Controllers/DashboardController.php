<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __invoke(){ // invoca una classe como si fuera una function. No puede tener otras functiones dentro de la classe
    //    return view('welcome');
    // }

    public function viewDashboard(){
        if (auth()->check()) { // verifica si el usuario está autenticado
            // usuario identificado
            $usuarios = \App\Models\User::all(); // Trae todos los usuarios de la base de datos
            $productos = \App\Models\Producto::all(); // Trae todos los productos de la base de datos
            $blog = \App\Models\Blogpost::all(); // Trae todos los blogposts de la base de datos

            return view('dashboard',[
                'usuarios' => $usuarios,
                'productos' => $productos,
                'blog' => $blog
            ]);
        } else {
            // usuario no identificado
            // return redirect('/'); // redirige a la vista de inicio

            $usuarios = \App\Models\User::all(); // Trae todos los usuarios de la base de datos
            $productos = \App\Models\Producto::all(); // Trae todos los productos de la base de datos
            $blog = \App\Models\Blogpost::all(); // Trae todos los blogposts de la base de datos

            return view('dashboard',[
                'usuarios' => $usuarios,
                'productos' => $productos,
                'blog' => $blog
            ]); //por ahora lo dejo igual
        }
    }
    
}