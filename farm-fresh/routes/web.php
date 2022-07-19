<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
Route::get('/admin/products', [AdminProductController::class, 'index']);
Route::get('/admin/products/create', [AdminProductController::class, 'create']);
// Route::post('/admin/products', [AdminProductController::class, 'store']);
// Route::get('/admin/products/{product}/edit', [AdminProductController::class, 'edit'])->name('product-edit');
// Route::put('/admin/products/{product}', [AdminProductController::class, 'update'])->name('product-update');
// Route::delete('/admin/products/{product}', [AdminProductController::class, 'destroy'])->name('product-delete');
