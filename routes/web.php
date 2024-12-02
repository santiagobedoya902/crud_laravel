<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductoController::class, 'index'])->name('productos.index');

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categoria.create');  
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categoria.store');
Route::get('/categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categoria.update');
Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');

Route::get('/proveedor', [ProveedorController::class, 'index'])->name('proveedor.index');
Route::get('/proveedor/create', [ProveedorController::class, 'create'])->name('proveedor.create');
Route::post('/proveedor', [ProveedorController::class, 'store'])->name('proveedor.store');
Route::get('/proveedor/{proveedor}/edit', [ProveedorController::class, 'edit'])->name('proveedor.edit');
Route::put('/proveedor/{proveedor}', [ProveedorController::class, 'update'])->name('proveedor.update');
Route::delete('/proveedor/{proveedor}', [ProveedorController::class, 'destroy'])->name('proveedor.destroy');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');
