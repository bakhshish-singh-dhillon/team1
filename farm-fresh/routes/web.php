<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
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
Route::get('/products/{category}/category', [ProductController::class, 'getProductsByCategory'])->name('products-by-category');
Route::get('/products/search', [ProductController::class, 'getProductsBySearch'])->name('products-by-search');
Route::get('/products/show/{product}', [ProductController::class, 'show'])->name('product');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact-submit');

// Admin Product List

Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
Route::get('/admin/products', [AdminProductController::class, 'index']);
Route::get('/admin/products/create', [AdminProductController::class, 'create']);
Route::post('/admin/products', [AdminProductController::class, 'store']);
Route::get('/admin/products/{product}/edit', [AdminProductController::class, 'edit'])->name('product-edit');
Route::put('/admin/products/{product}', [AdminProductController::class, 'update'])->name('product-update');
Route::delete('/admin/products/{product}', [AdminProductController::class, 'destroy'])->name('product-delete');

// Admin Order List

Route::get('/admin/orders', [AdminOrderController::class, 'index']);
Route::get('/admin/orders/create', [AdminOrderController::class, 'create']);
Route::post('/admin/orders', [AdminOrderController::class, 'store']);
Route::get('/admin/orders/{order}/edit', [AdminOrderController::class, 'edit'])->name('order-edit');
Route::put('/admin/orders/{order}', [AdminOrderController::class, 'update'])->name('order-update');
Route::delete('/admin/orders/{order}', [AdminOrderController::class, 'destroy'])->name('order-delete');

//Checkout Steps Urls
Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::get('add-to-cart/{product}', [CartController::class, 'add'])->name('add-to-cart');
Route::delete('remove-cart-item/{product}', [CartController::class, 'remove'])->name('remove-cart-item');
Route::delete('clear-cart', [CartController::class, 'clear'])->name('clear-cart');
Route::get('choose-addresses', [AddressController::class, 'index'])->name('choose-addresses');
Route::post('choose-addresses', [AddressController::class, 'store'])->name('store-addresses');
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
// Route::put('choose-addresses', [AddressController::class, 'update'])->name('update-addresses');
//Checkout Steps End

//Admin Category Urls
Route::get('/admin/categories', [AdminCategoryController::class, 'index']);
//Admin Category Urls end

// Pulkit URL Start
Route::get('/about', function () {
    return view('about');
});
Route::get('/terms-and-conditions', [TermsController::class, 'index'])->name('terms');
Route::get('/404', function () {
    return view('404');
});
Route::get('/admin/users', [AdminUserController::class, 'index']);
Route::delete('/admin/users/{user}', [AdminUserController::class, 'destroy'])->name('user-delete');

// Pulkit URL Ends
