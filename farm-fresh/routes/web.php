<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/show/{id}', [ProductController::class, 'show'])->name('product');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact-submit');

Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
Route::get('/admin/products', [AdminProductController::class, 'index']);
Route::get('/admin/products/create', [AdminProductController::class, 'create']);
Route::post('/admin/products', [AdminProductController::class, 'store']);
Route::get('/admin/products/{product}/edit', [AdminProductController::class, 'edit'])->name('product-edit');
Route::put('/admin/products/{product}', [AdminProductController::class, 'update'])->name('product-update');
Route::delete('/admin/products/{product}', [AdminProductController::class, 'destroy'])->name('product-delete');

// Pulkit URL Start
Route::get('/about', function () {
    return view('about');
});
Route::get('/terms', [App\Http\Controllers\TermsController::class, 'index'])->name('terms');
Route::get('/404', function () {
    return view('404');
});

// Pulkit URL Ends
