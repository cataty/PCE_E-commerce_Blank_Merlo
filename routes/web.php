<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuienesSomosController; 
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'viewHome'])
    ->name('home');

Route::get('/contact', [ContactController::class, 'viewContact'])
    ->name('contact');

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
    ->name('cargaDatosBlogpost')
    ->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');


Route::get('/iniciar-sesion', [AuthController::class, 'viewLogin'])
    ->name('login');

Route::post('/iniciar-sesion', [AuthController::class, 'authenticate'])
    ->name('login.authenticate');

Route::post('/cerrar-sesion', [AuthController::class, 'logout'])
    ->name('logout');
