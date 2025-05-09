<?php

namespace App\Http\Controllers;
#
use App\Models\Blogpost; // Importa el modelo Blogpost
use Illuminate\Http\Request;
use App\Models\CategoriaBlog; // Importa el modelo CategoriaBlog
use App\Models\Producto; // Importa el modelo Producto
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
        $productosAleatorios = Producto::inRandomOrder()->take(3)->get(); // Trae 3 productos aleatorios de la base de datos para mostrar debajo del blogpost
        return view('blogpost', ['blogpost' => $blogpost], ['productosAleatorios' => $productosAleatorios]); // Retorna la vista blog.blade.php y le pasa la variable blogpost
    }

    public function createBlogpost(Request $request){
        $categorias = CategoriaBlog::all(); // Trae todas las categorias de la base de datos
        return view('crearBlogpost', ['categorias' => $categorias]); 
    } 

   /* public function editBlogpost($id, Request $request){
        if($request->isMethod('post')){ // Mejorar ???!!!
            $blogpost = Blogpost::find($id); // Crea un nuevo blogpost
            $blogpost->title = $request->input('title'); // Asigna el titulo del blogpost
            $blogpost->content = $request->input('content'); // Asigna el contenido del blogpost
            $blogpost->save(); // Guarda el blogpost en la base de datos
            return redirect()->route('dashboard'); // Redirige al dashboard
        }
        return view('editarBlogpost'); // Retorna la vista editarBlogpost.blade.php
    } */

   
    public function saveDataBlogpost(Request $request){
        $request->validate([
            'titulo' => 'required|max:255',
            'contenido' => 'required',
            'imagen' => 'required',
            'categoria' => 'required',
        ], 
        [
            'titulo.required' => 'El campo título es obligatorio',
            'contenido.required' => 'El campo contenido es obligatorio',
            'imagen.required' => 'El campo imagen es obligatorio',
            'categoria.required' => 'El campo categoría es obligatorio',
        ]);
        
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
    
    public function deleteBlogpost($id)
    {
        $blogpost = Blogpost::find($id);

        $blogpost->delete();

        return redirect()->route('dashboard')->with('feedback.message', 'Blogpost eliminado con éxito.');
    }

    public function editarBlogpost($id, Request $request){
        $blogpost = Blogpost::find($id); // Busca el blogpost por id
        $categorias = CategoriaBlog::all(); // Trae todas las categorias de la base de datos
        return view('editarBlogpost', ['blogpost' => $blogpost, 'categorias' => $categorias]); // Retorna la vista editarBlogpost.blade.php y le pasa la variable blogpost
    }

    public function cargaEditBlogpost($id, Request $request){
        $request->validate([
            'titulo' => 'required|max:255',
            'contenido' => 'required',
            'imagen' => 'required',
            'categoria' => 'required',
        ], 
        [
            'titulo.required' => 'El campo título es obligatorio',
            'contenido.required' => 'El campo contenido es obligatorio',
            'imagen.required' => 'El campo imagen es obligatorio',
            'categoria.required' => 'El campo categoría es obligatorio',
        ]);
        
        
        $blogpost = Blogpost::findOrFail($id);
        $blogpost->titulo = $request->input('titulo'); // Asigna el titulo del blogpost
        $blogpost->contenido = $request->input('contenido'); // Asigna el contenido del blogpost
        $blogpost->imagen = $request->input('imagen'); // Asigna la imagen del blogpost
        $blogpost->categoria_blog_id = $request->input('categoria'); // Asigna el id de la categoria del blogpost
        $blogpost->usuario_id = auth()->id(); // Asigna el id del usuario que edita el blogpost
        $blogpost->save(); // Guarda el blogpost en la base de datos
      
       

    

        return redirect()
            ->route('blog') 
            ->with ('feedback.message', 'Posteo editado con éxito'); // Redirige a la vista blog.blade.php y le pasa la variable success  
        
    }

}
