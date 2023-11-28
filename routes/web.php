<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/menu', [ProductController::class, 'index'])->name('menu');
Route::get('/menu/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('/products', ProductController::class)->names('products');
    // Route::resource('/users', UserController::class)->names('users');
    Route::resource('/categories', CategoryController::class)->names('categories');
});
