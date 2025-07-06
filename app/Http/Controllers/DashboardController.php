<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function __invoke(){ // invoca una classe como si fuera una function. No puede tener otras functiones dentro de la classe
    //    return view('welcome');
    // }

    public function index()
    {
        if (Auth::check()) { // verifica si el usuario está autenticado
            if (auth()->user()->id === 1) { // usuario identificado y es admin
                $usuarios = \App\Models\User::all(); // Trae todos los usuarios de la base de datos
                $productos = \App\Models\Producto::all(); // Trae todos los productos de la base de datos
                $blog = \App\Models\Blogpost::all(); // Trae todos los blogposts de la base de datos

                return view('dashboard', [
                    'usuarios' => $usuarios,
                    'productos' => $productos,
                    'blog' => $blog
                ]);
            } else {
                return view('home', [
                    'message' => 'No tenés permiso para acceder al dashboard. Solo los administradores pueden ver esta página.'
                ])->withErrors([
                    'dashboard' => 'No tenés permiso para acceder al dashboard. Solo los administradores pueden ver esta página.'
                ]);
             
            }   // return redirect('/'); // redirige a la vista de inicio

                $usuarios = \App\Models\User::all(); // Trae todos los usuarios de la base de datos
                $productos = \App\Models\Producto::all(); // Trae todos los productos de la base de datos
                $blog = \App\Models\Blogpost::all(); // Trae todos los blogposts de la base de datos

                return view('dashboard', [
                    'usuarios' => $usuarios,
                    'productos' => $productos,
                    'blog' => $blog
                ]); //por ahora lo dejo igual
            }
        }
    }
    