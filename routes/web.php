<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PedidosController;

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

Route::get('/', [ProductosController::class, 'index'])->name('productos.index');

Route::get('/instrumentos', function () {return view('instrumentos');});

// Route::get('/pedidos', function () {
//     return view('pedidos');
// });

//Pedidos

Route::get('/verpedido',[PedidosController::class,'index'])->name('pedido.index');

Route::get('/pedidos',[PedidosController::class,'create'])->name('pedido.create');

Route::post('/pedidos',[PedidosController::class,'store'])->name('pedido.store');

Route::delete('/destroy/{id}', [PedidosController::class, 'destroy'])->name('pedido.destroy');


//Productos
Route::get('/stock', [ProductosController::class, 'create'])->name('productos.create');

Route::get('/edit/{id}', [ProductosController::class, 'edit'])->name('productos.edit');

Route::put('/update/{id}', [ProductosController::class, 'update'])->name('productos.update');

Route::get('/show/{id}', [ProductosController::class, 'show'])->name('productos.show');

Route::post('/store', [ProductosController::class, 'store'])->name('productos.store');

Route::delete('/destroy/{id}', [ProductosController::class, 'destroy'])->name('productos.destroy');


//Documentos pdf
Route::get('/pdf', [ProductosController::class, 'pdf'])->name('productos.pdf');

Route::get('/pdfpedidos', [PedidosController::class, 'pdf'])->name('pedido.pdf');


