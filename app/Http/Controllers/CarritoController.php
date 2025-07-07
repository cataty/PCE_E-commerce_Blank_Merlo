<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
        public function viewCarrito(int $id){

        // $carrito = Carrito::findOrFail($id)->toArray(); // Trae el carrito de la base de datos y lo convierte a un array
        // return view('carrito', ['carrito' => $carrito]); // Retorna la vista carrito.blade.php y le pasa la variable carrito
    }

}
