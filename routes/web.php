<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\VentaController;


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

Route::get('/prueba', function () {
    return view('prueba');
});

Route::resource('categorias',CategoriaController::class)->parameters(['categorias' => 'categoria'])->names('categorias');
Route::resource('proveedores',ProveedorController::class)->parameters(['proveedores' => 'proveedor'])->names('proveedores');
Route::resource('clientes',ClienteController::class)->parameters(['clientes' => 'cliente'])->names('clientes');
Route::resource('productos',ProductoController::class)->parameters(['productos' => 'producto'])->names('productos');
Route::resource('compras',CompraController::class)->parameters(['compras' => 'compra'])->names('compras');
Route::resource('ventas',VentaController::class)->parameters(['ventas' => 'venta'])->names('ventas');
