<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\BlogController;



Route::get('/', [\App\Http\Controllers\HomeController::class, 'viewHome']) ->name('home'); // dentro de la classe HomeController, buscamos el metodo viewHome y la ejecutamos cuando se accede a la ruta /

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'viewContact'])->name('contact'); // dentro de la classe ContactController, buscamos el metodo viewContact y la ejecutamos cuando se accede a la ruta /contact

Route::get('/productos/todos', [\App\Http\Controllers\ProductosController::class, 'viewProductos'])->name('productos'); // dentro de la classe ProductosController, buscamos el metodo viewProductos y la ejecutamos cuando se accede a la ruta /productos  

Route::get('/productos/{id}', function ($id) { // se puede pasar un parametro como una id mediante la ruta
    echo "El id del producto es: $id";
});

Route::get('/blog/todos', [\App\Http\Controllers\BlogController::class, 'viewBlog'])->name('blog'); // dentro de la classe ProductosController, buscamos el metodo viewProductos y la ejecutamos cuando se accede a la ruta /productos  

Route::get('/blog/{id}', function ($id) { // se puede pasar un parametro como una id mediante la ruta
    echo "El id del blog es: $id";
});

