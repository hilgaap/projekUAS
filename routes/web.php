<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/products', [ProductController::class, 'index'])->name('products.index');
//Route::post('/products/load', [ProductController::class, 'load'])->name('products.load');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
//Route::post('/products/load', [ProductController::class, 'load'])->name('products.load');
Route::get('/products/load', [ProductController::class, 'load'])->name('products.load');
Route::post('/products/action', [ProductController::class, 'handleAction'])->name('products.action');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{kode}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/{kode}/update', [ProductController::class, 'update'])->name('products.update');
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::post('/products/action', [ProductController::class, 'handleAction'])->name('products.action');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::get('/products/{kode}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
// // Menu transaksi

// Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');
// Route::post('/sales/add', [SaleController::class, 'addToCart'])->name('sales.add');
// Route::post('/sales/checkout', [SaleController::class, 'checkout'])->name('sales.checkout');
Route::get('/sales', [App\Http\Controllers\SaleController::class, 'index'])->name('sales.index');
Route::post('/sales/add', [App\Http\Controllers\SaleController::class, 'add'])->name('sales.add');
Route::post('/sales/checkout', [App\Http\Controllers\SaleController::class, 'checkout'])->name('sales.checkout');
Route::post('/sales/remove', [App\Http\Controllers\SaleController::class, 'remove'])->name('sales.remove');
Route::post('/sales/edit', [App\Http\Controllers\SaleController::class, 'edit'])->name('sales.edit');
