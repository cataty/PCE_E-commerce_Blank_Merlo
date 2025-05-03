<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    // public function __invoke(){ // invoca una classe como si fuera una function. No puede tener otras functiones dentro de la classe
    //    return view('welcome');
    // }

    public function viewProductos(){

        $productos = Producto::all(); // Trae todos los productos de la base de datos
        return view('productos', ['productos' => $productos]); // Retorna la vista productos.blade.php y le pasa la variable productos
    }

    public function viewProducto(int $id){

        $producto = Producto::findOrFail($id)->toArray(); // Trae el producto de la base de datos y lo convierte a un array
        return view('producto', ['producto' => $producto]); // Retorna la vista producto.blade.php y le pasa la variable producto
    }
    
}
