<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'] ); // dentro de la classe HomeController, buscamos el metodo index y la ejecutamos cuando se accede a la ruta /

Route::get('/contact', [ContactController::class, 'viewContact']); // dentro de la classe ContactController, buscamos el metodo viewContact y la ejecutamos cuando se accede a la ruta /contact

Route::get('/productos', [ProductosController::class, 'viewProductos']); // dentro de la classe ProductosController, buscamos el metodo viewProductos y la ejecutamos cuando se accede a la ruta /productos  

Route::get('/productos/{id}', function ($id) { // se puede pasar un parametro como una id mediante la ruta
    echo "El id del producto es: $id";
});

Route::get('/blog', [BlogController::class, 'viewBlog']); // dentro de la classe BlogController, buscamos el metodo viewBlog y la ejecutamos cuando se accede a la ruta /blog

Route::get('/blog/{id}', function ($id) { // se puede pasar un parametro como una id mediante la ruta
    echo "El id del articulo es: $id";
});


