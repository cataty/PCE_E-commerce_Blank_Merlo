<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuienesSomosController; 


Route::get('/', [HomeController::class, 'viewHome'])
    ->name('home');

Route::get('/contact', [ContactController::class, 'viewContact'])
    ->name('contact');

Route::get('quienes-somos', [QuienesSomosController::class, 'viewQuienesSomos'])
    ->name('quienes-somos');

Route::get('/productos/todos', [ProductosController::class, 'viewProductos'])
    ->name('productos');

Route::get('/productos/{id}', [ProductosController::class, 'viewProducto'])
    ->name('producto')
    ->where('id', '[0-9]+');

Route::get('/blog/todos', [BlogController::class, 'viewBlog'])
    ->name('blog');

Route::get('/blog/{id}', [BlogController::class, 'viewBlogpost'])
    ->name('blogpost')
    ->where('id', '[0-9]+');

Route::get('/blog/{id}/editar', [BlogController::class, 'editBlogpost'])
    ->name('editarBlogpost')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/blog/publicar', [BlogController::class, 'createBlogpost'])
    ->name('crearBlogpost')
    ->middleware('auth');

Route::post('/blog/publicar', [BlogController::class, 'cargaDatosBlogpost'])
    ->name('cargaDatosBlogpost');

Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])
    ->name('dashboard')
    ->middleware('auth');

