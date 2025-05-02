<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController; 



Route::get('/', [HomeController::class, 'viewHome']) ->name('home'); // dentro de la classe HomeController, buscamos el metodo viewHome y la ejecutamos cuando se accede a la ruta /

Route::get('/contact', [ContactController::class, 'viewContact'])->name('contact'); // dentro de la classe ContactController, buscamos el metodo viewContact y la ejecutamos cuando se accede a la ruta /contact

Route::get('/productos/todos', [ProductosController::class, 'viewProductos'])->name('productos'); // dentro de la classe ProductosController, buscamos el metodo viewProductos y la ejecutamos cuando se accede a la ruta /productos  

Route::get('/productos/{id}', [ProductosController::class, 'viewProducto'])->name('producto')->whereNumber('id');

Route::get('/blog/todos', [\App\Http\Controllers\BlogController::class, 'viewBlog'])->name('blog');

//Route::get('/blog/{id}', function ($id) { // se puede pasar un parametro como una id mediante la ruta
    //echo "El id del blog es: $id";
//});
Route::get('/blog/{id}', [BlogController::class, 'viewBlogpost'])->name('blogpost')->whereNumber('id');

Route::get('/blog/{id}/editar', [BlogController::class, 'editBlogpost'])->name('editarBlogpost')->whereNumber('id');

Route::get('/blog/publicar', [BlogController::class, 'createBlogpost'])->name('crearBlogpost')->middleware('auth'); // solo los usuarios autenticados pueden acceder a esta ruta

Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->name('dashboard');

