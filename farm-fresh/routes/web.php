<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
// Route::get('/admin/products', [AdminProductsController::class, 'index']);
// Route::get('/admin/products/create', [AdminProductsController::class, 'create']);
// Route::post('/admin/products', [AdminProductsController::class, 'store']);
// Route::get('/admin/products/{product}/edit', [AdminProductsController::class, 'edit'])->name('product-edit');
// Route::put('/admin/products/{product}', [AdminProductsController::class, 'update'])->name('product-update');
// Route::delete('/admin/products/{product}', [AdminProductsController::class, 'destroy'])->name('product-delete');
