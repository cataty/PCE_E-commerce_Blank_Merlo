<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    // public function __invoke(){ // invoca una classe como si fuera una function. No puede tener otras functiones dentro de la classe
    //    return view('welcome');
    // }

    public function viewProductos(){
        return view('productos');
    }
    
}
