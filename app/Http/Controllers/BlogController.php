<?php

namespace App\Http\Controllers;
#
use App\Models\Blogpost; // Importa el modelo Blogpost
use Illuminate\Http\Request;
use App\Models\CategoriaBlog; // Importa el modelo CategoriaBlog
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthManager; 


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
        $blogpost = Blogpost::findOrFail($id); // Busca el blogpost por id
        return view('blogpost', ['blogpost' => $blogpost]); // Retorna la vista blog.blade.php y le pasa la variable blogpost
    }

    public function createBlogpost(Request $request){
        /*if($request->isMethod('post')){ // Si el metodo de la peticion es post
            $blogpost = new Blogpost(); // Crea un nuevo blogpost
            $blogpost->title = $request->input('title'); // Asigna el titulo del blogpost
            $blogpost->content = $request->input('content'); // Asigna el contenido del blogpost
            $blogpost->save(); // Guarda el blogpost en la base de datos
            return redirect()->route('dashboard'); // Redirige al dashboard
        }*/
        $categorias = CategoriaBlog::all(); // Trae todas las categorias de la base de datos
        return view('crearBlogpost', ['categorias' => $categorias]); 
    } 

    public function editBlogpost($id, Request $request){
        if($request->isMethod('post')){ // Mejorar ???!!!
            $blogpost = Blogpost::find($id); // Crea un nuevo blogpost
            $blogpost->title = $request->input('title'); // Asigna el titulo del blogpost
            $blogpost->content = $request->input('content'); // Asigna el contenido del blogpost
            $blogpost->save(); // Guarda el blogpost en la base de datos
            return redirect()->route('dashboard'); // Redirige al dashboard
        }
        return view('editarBlogpost'); // Retorna la vista editarBlogpost.blade.php
    }

    //metodo para captar datos del formulario para crear un nuevo blogpost e insertarlos en la base de datos:
    public function cargaDatosBlogpost(Request $request){
        $input = $request->all(); 

        $blogpost =             new Blogpost();
        $blogpost->titulo =     $input['titulo'];
        $blogpost->contenido =  $input['contenido'];
        $blogpost->imagen =     $input['imagen'];
        $blogpost->categoria_blog_id = $input['categoria']; // Asigna el id de la categoria del blogpost
        $blogpost->usuario_id = auth()->id();
        $blogpost->save();

        return redirect()
            ->route('blog') 
            ->with ('feedback.message', 'Posteo creado con éxito'); // Redirige a la vista blog.blade.php y le pasa la variable success  
        
    }
    
}
