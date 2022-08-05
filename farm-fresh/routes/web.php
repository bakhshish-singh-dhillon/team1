<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminReviewController;
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
Route::get('/products/show', [ReviewController::class, 'create']);
Route::post('/products/show/{product}/review', [ReviewController::class, 'store'])->name('store-product-review');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact-submit');
// Route::get('/profile', [UserProfileController::class, 'index'])->name('users-profile');
Route::get('/user-profile/{user}', [UserProfileController::class, 'show'])->name('user-profile');
Route::get('user-order/{order}', [UserProfileController::class, 'show_order'])->name('user-order');
Route::put('/user-profile/{user}', [UserProfileController::class, 'update'])->name('user-detail-update');
Route::get('/user-profile/{user}/addresses', [UserProfileController::class, 'addresses'])->name('user-profile-addresses');
Route::post('/user-profile/{user}/addresses', [UserProfileController::class, 'store'])->name('user-profile-store-addresses');

// Admin Product List

Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
Route::get('/admin/products', [AdminProductController::class, 'index'])->name('admin-get-products');
Route::get('/admin/products/create', [AdminProductController::class, 'create']);
Route::post('/admin/products', [AdminProductController::class, 'store']);
Route::get('/admin/products/{product}/edit', [AdminProductController::class, 'edit'])->name('product-edit');
Route::put('/admin/products/{product}', [AdminProductController::class, 'update'])->name('product-update');
Route::delete('/admin/products/{product}', [AdminProductController::class, 'destroy'])->name('product-delete');

Route::delete('/admin/orders/{order}', [AdminOrderController::class, 'destroy'])->name('order-delete');
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
Route::post('checkout', [CheckoutController::class, 'process_payment'])->name('process-payment');
Route::get('thank-you/{order}', [CheckoutController::class, 'thank_you'])->name('thank-you');
// Route::put('choose-addresses', [AddressController::class, 'update'])->name('update-addresses');
//Checkout Steps End

//Admin Category Urls
Route::get('/admin/categories', [AdminCategoryController::class, 'index']);
Route::post('/admin/categories', [AdminCategoryController::class, 'store']);
Route::put('/admin/categories/{category}', [AdminCategoryController::class, 'update'])->name('category-update');
Route::delete('/admin/categories/{category}', [AdminCategoryController::class, 'destroy'])->name('cat-delete');
Route::get('admin/categories/search', [AdminCategoryController::class, 'getCategoryBySearch'])->name('category-by-search');
//Admin Category Urls end

// Pulkit URL Start

Route::get('/terms-and-conditions', [TermsController::class, 'index'])->name('terms');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/privacy-policy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/admin/users', [AdminUserController::class, 'index']);
Route::put('/admin/{user}/user', [AdminUserController::class, 'update'])->name('user-update');
Route::delete('/admin/users/{user}', [AdminUserController::class, 'destroy'])->name('user-delete');
Route::get('/admin/reviews', [AdminReviewController::class, 'index']);
Route::delete('/admin/reviews/{review}', [AdminReviewController::class, 'destroy'])->name('review-delete');
Route::put('/admin/{review}/review', [AdminReviewController::class, 'update'])->name('review-update');
Route::fallback([App\Http\Controllers\PageNotFoundController::class, 'notfound']);

// Pulkit URL Ends
