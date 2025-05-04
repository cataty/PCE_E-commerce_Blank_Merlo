<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; // Importa el modelo Producto
use App\Models\Blogpost; // Importa el modelo Blogpost

class HomeController extends Controller{

    public function viewHome(){
        $productosAleatorios = Producto::inRandomOrder()->take(3)->get(); // Trae 3 productos aleatorios de la base de datos para mostrar en la home
        return view('home');
    }
    
}
