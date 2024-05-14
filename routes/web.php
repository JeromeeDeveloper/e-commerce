<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Controller;

// Route::get('/list', function () {
//     return view('list');
// });

Route::get('/', [ShopController::class, 'index'])->name('shop');
Route::get('/about', [AboutController::class, 'about'])->name('about.name');
Route::get('/products', [ProductsController::class, 'products'])->name('products.name');
Route::get('/singleproducts', [ProductsController::class, 'singleproducts'])->name('singleproduct.name');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/list', [ProductsController::class, 'list'])->name('list.name');
