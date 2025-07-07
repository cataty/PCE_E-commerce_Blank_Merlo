<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function createProducto(Request $request){
        // Aquí podrías implementar la lógica para crear un nuevo producto
        return view('crearProducto'); // Retorna la vista crearProducto.blade.php
    }

    public function saveDataProducto(Request $request){
        // Aquí podrías implementar la lógica para guardar los datos del producto
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], 
        [
            'nombre.required' => 'El campo nombre es obligatorio',
            'descripcion.required' => 'El campo descripción es obligatorio',
            'precio.required' => 'El campo precio es obligatorio',
            'imagen.required' => 'El campo imagen es obligatorio',
        ]);

        $input = $request->all(); 

        $producto =             new Producto();
        $producto->nombre =     $input['nombre'];
        $producto->descripcion =  $input['descripcion'];
        $producto->precio =     $input['precio'];
        $producto->categoria =   'Remeras';
        $file = $request->file('imagen'); // Obtiene el archivo de imagen del request
        $path = $file->store('productos', 'public'); // Guarda la imagen en el disco 'public' en la carpeta 'imagenes'
        $producto->imagen = $path; // Asigna la ruta de la imagen al producto
       
        /* $producto->categoria_blog_id = $input['categoria']; // Asigna el id de la categoria del producto */
        $producto->save();

        return redirect()
            ->route('productos') 
            ->with ('feedback.message', 'Producto creado con éxito'); // Redirige a la vista productos.blade.php
    }


    public function editarProducto(int $id){
        $producto = Producto::findOrFail($id); // Busca el producto por id
        return view('editarProducto', ['producto' => $producto]); // Retorna la vista editarProducto.blade.php y le pasa la variable producto
    }

    public function cargaEditProducto(Request $request, int $id){
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'imagen' => 'image',
        ], 
        [
            'nombre.required' => 'El campo nombre es obligatorio',
            'descripcion.required' => 'El campo descripción es obligatorio',
            'precio.required' => 'El campo precio es obligatorio',
            'imagen.image' => 'El campo imagen debe ser una imagen válida',
        ]);


        $input = $request->all(); 

        $producto = Producto::findOrFail($id);
        $producto->nombre =     $input['nombre'];
        $producto->descripcion =  $input['descripcion'];
        $producto->precio =     $input['precio'];
        $producto->categoria =   'Remeras';
        if ($request->hasFile('imagen')) {
            Storage::disk('public')->delete($producto->imagen); // Elimina la imagen anterior si existe
            $file = $request->file('imagen'); // Obtiene el archivo de imagen del request
            $path = $file->store('productos', 'public'); // Guarda la imagen en el disco 'public' en la carpeta 'imagenes'
            $producto->imagen = $path; // Asigna la ruta de la imagen al producto
        }
        $producto->save();

        return redirect()
            ->route('productos') 
            ->with ('feedback.message', 'Producto editado con éxito'); // Redirige a la vista productos.blade.php
    }


    public function deleteProducto(int $id){
        $producto = Producto::findOrFail($id); // Busca el producto por id
        if ($producto->imagen) {
            Storage::disk('public')->delete($producto->imagen);
        }
        $producto->delete(); // Elimina el producto de la base de datos
        return redirect()->route('productos'); // Redirige a la lista de productos
    }
    
}