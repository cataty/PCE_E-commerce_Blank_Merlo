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
            return view('dashboard'); // vista dashboard
        } else {
            // usuario no identificado
            return redirect('/'); // redirige a la vista de inicio
        }
    }
    
}