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

    public function viewBlogpost($id){
        $blogpost = Blogpost::find($id); // Busca el blogpost por id
        return view('blogpost', ['blogpost' => $blogpost]); // Retorna la vista blog.blade.php y le pasa la variable blogpost
    }

    public function createBlogpost(Request $request){
        if($request->isMethod('post')){ // Si el metodo de la peticion es post
            $blogpost = new Blogpost(); // Crea un nuevo blogpost
            $blogpost->title = $request->input('title'); // Asigna el titulo del blogpost
            $blogpost->content = $request->input('content'); // Asigna el contenido del blogpost
            $blogpost->save(); // Guarda el blogpost en la base de datos
            return redirect()->route('blog'); // Redirige a la ruta blog
        }
        return view('crearBlogpost'); // Retorna la vista crearBlogpost.blade.php
    }
    
}
