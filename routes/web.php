<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nombre', function () {
    return view('nombre');
});

Route::get('/apat', function () {
    return view('apat');
});

Route::get('/amat', function () {
    return view('amat');
});

Route::get('/perfil', function(){
    return view('users/perfil');
});


//Categorias
Route::get('categorias', [CategoriasController::class, 'index'])->name('categorias.index');
Route::get('categorias/create', [CategoriasController::class, 'create'])->name('categorias.create');
Route::post('categorias', [CategoriasController::class, 'store'])->name('categorias.store');
Route::get('categorias/{categoria}', [CategoriasController::class, 'show'])->name('categorias.show');
Route::get('categorias/{categoria}/edit', [CategoriasController::class, 'edit'])->name('categorias.edit');
Route::put('categorias/{categoria}', [CategoriasController::class, 'update'])->name('categorias.update');
Route::delete('categorias/{categoria}', [CategoriasController::class, 'destroy'])->name('categorias.destroy');

//Productos
Route::get('productos', [ProductosController::class, 'index'])->name('productos.index');
Route::get('productos/create', [ProductosController::class, 'create'])->name('productos.create');
Route::post('productos', [ProductosController::class, 'store'])->name('productos.store');
Route::get('productos/{producto}', [ProductosController::class, 'show'])->name('productos.show');
Route::get('productos/{producto}/edit', [ProductosController::class, 'edit'])->name('productos.edit');
Route::put('productos/{producto}', [ProductosController::class, 'update'])->name('productos.update');
Route::delete('productos/{producto}', [ProductosController::class, 'destroy'])->name('productos.destroy');

//Usuarios
Route::get('usuarios', [UsersController::class, 'index'])->name('users.index');
Route::get('usuarios/create', [UsersController::class, 'create'])->name('users.create');
Route::post('usuarios', [UsersController::class, 'store'])->name('users.store');
Route::get('usuarios/{id}', [UsersController::class, 'show'])->name('users.show');
Route::get('usuarios/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');

//Roles
Route::get('roles', [RolesController::class, 'index'])->name('roles.index');
Route::get('roles/create', [RolesController::class, 'create'])->name('roles.create');
Route::post('roles', [RolesController::class, 'store'])->name('roles.store');
Route::get('roles/{role}', [RolesController::class, 'show'])->name('roles.show');
Route::get('roles/{role}/edit', [RolesController::class, 'edit'])->name('roles.edit');
Route::put('roles/{role}', [RolesController::class, 'update'])->name('roles.update');
Route::delete('roles/{role}', [RolesController::class, 'destroy'])->name('roles.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');