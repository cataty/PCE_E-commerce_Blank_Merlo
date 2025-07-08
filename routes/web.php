<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuienesSomosController; 
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GraciasController;
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

Route::get('/productos/{id}/editar', [ProductosController::class, 'editarProducto'])
    ->name('editarProducto')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::post('/productos/{id}/editar', [ProductosController::class, 'cargaEditProducto'])
    ->name('cargaEditarProducto')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/productos/publicar', [ProductosController::class, 'createProducto'])
    ->name('crearProducto')
    ->middleware('auth');

Route::post('/productos/publicar', [ProductosController::class, 'saveDataProducto'])
    ->name('cargaDatosProducto')
    ->middleware('auth');

Route::delete('/productos/{id}/eliminar', [ProductosController::class, 'deleteProducto'])
    ->name('deleteProducto')
    ->where('id', '[0-9]+')
    ->middleware('auth');


Route::get('/blog/todos', [BlogController::class, 'viewBlog'])
    ->name('blog');

Route::get('/blog/{id}', [BlogController::class, 'viewBlogpost'])
    ->name('blogpost')
    ->where('id', '[0-9]+');

Route::get('/blog/{id}/editar', [BlogController::class, 'editarBlogpost'])
    ->name('editarBlogpost')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::post('/blog/{id}/editar', [BlogController::class, 'cargaEditBlogpost'])
    ->name('cargaEditarBlogpost')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/blog/publicar', [BlogController::class, 'createBlogpost'])
    ->name('crearBlogpost')
    ->middleware('auth');

Route::post('/blog/publicar', [BlogController::class, 'saveDataBlogpost'])
    ->name('cargaDatosBlogpost')
    ->middleware('auth');

Route::delete('/blog/{id}/eliminar', [BlogController::class, 'deleteBlogpost'])
    ->name('deleteBlogpost')
    ->where('id', '[0-9]+')
    ->middleware('auth');


Route::get('/usuarios/todos', [UsuariosController::class, 'viewUsuarios'])
    ->name('usuarios');

Route::get('/usuarios/{id}', [UsuariosController::class, 'viewUsuario'])
    ->name('usuario')
    ->where('id', '[0-9]+');

Route::get('/usuarios/{id}/editar', [UsuariosController::class, 'editarUsuario'])
    ->name('editarUsuario')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::post('/usuarios/{id}/editar', [UsuariosController::class, 'cargaEditUsuario'])
    ->name('cargaEditarUsuario')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::get('/usuarios/registro', [UsuariosController::class, 'createUsuario'])
    ->name('crearUsuario');

Route::post('/usuarios/registro', [UsuariosController::class, 'saveDataUsuario'])
    ->name('cargaDatosUsuario');

Route::delete('/usuarios/{id}/eliminar', [UsuariosController::class, 'deleteUsuario'])
    ->name('deleteUsuario')
    ->where('id', '[0-9]+')
    ->middleware('auth');
    

 
Route::post('/carrito/agregar', [CartItemController::class, 'agregar'])
    ->name('carrito.agregar')
    ->middleware('auth');

Route::get('/carrito', [CartItemController::class, 'viewCarrito'])
    ->name('carrito.ver')
    ->middleware('auth');

Route::post('/carrito/{id}', [CartItemController::class, 'actualizar'])
    ->name('cargaEditarCarrito')
    ->where('id', '[0-9]+')
    ->middleware('auth');

Route::delete('/carrito/{id}', [CartItemController::class, 'eliminar'])
    ->name('carrito.eliminar')
    ->middleware('auth');

Route::post('/carrito/vaciar', [CartItemController::class, 'vaciar'])
    ->name('carrito.vaciar')
    ->middleware('auth');




Route::get('/gracias', [GraciasController::class, 'viewGracias'])
    ->name('gracias');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::get('/iniciar-sesion', [AuthController::class, 'viewLogin'])
    ->name('login');

Route::post('/iniciar-sesion', [AuthController::class, 'authenticate'])
    ->name('login.authenticate');

Route::post('/cerrar-sesion', [AuthController::class, 'logout'])
    ->name('logout');
