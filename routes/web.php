<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'viewHome'] );

Route::get('/contact', [ContactController::class, 'viewContact']); // dentro de la classe ContactController, buscamos el metodo viewContact y la ejecutamos cuando se accede a la ruta /contact

Route::get('/productos/todos', [ProductosController::class, 'viewProductos']); // dentro de la classe ProductosController, buscamos el metodo viewProductos y la ejecutamos cuando se accede a la ruta /productos  

Route::get('/blog/todos', [BlogController::class, 'viewBlog']); // dentro de la classe BlogController, buscamos el metodo viewBlog y la ejecutamos cuando se accede a la ruta /blog

Route::get('/blog/{id}', function ($id) { // se puede pasar un parametro como una id mediante la ruta
    echo "El id del articulo es: $id";
});

Route::get('/productos/{id}', function ($id) { // se puede pasar un parametro como una id mediante la ruta
    echo "El id del producto es: $id";
});


