<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route to view the homepage or a welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route to display all products
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

// Route to display the form for creating a new product
Route::get('/product/create', [ProductController::class, 'add'])->name('product.create');

// Route to store a new product
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

// Route to display the edit form for a specific product
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');

// Route to handle the update of a specific product
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
