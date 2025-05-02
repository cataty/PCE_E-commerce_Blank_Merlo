<?php

namespace App\Http\Controllers;
#
use App\Models\Blogpost; // Importa el modelo Blogpost
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // public function __invoke(){ // invoca una classe como si fuera una function. No puede tener otras functiones dentro de la classe
    //    return view('welcome');
    // }

    public function viewBlog(){
        $blog = Blogpost::all(); // Trae todos los blogposts de la base de datos
        return view('blog', ['blog' => $blog]); // Retorna la vista blog.blade.php y le pasa la variable blog
    }
    
}
