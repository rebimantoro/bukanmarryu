<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ViewDataController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BookingController;
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


Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/home/{id}', [HomeController::class, 'adminEditHome'])->middleware('is_admin');
Route::post('admin/home/update', [HomeController::class, 'adminUpdateHome'])->name('adminUpdate');
Route::get('admin/testimoni', [BookingController::class, 'testimoniIndex']);
Route::get('admin/testimoni/show/{id}', [BookingController::class, 'testimoniShow']);
Route::get('admin/testimoni/hide/{id}', [BookingController::class, 'testimoniHide']);
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


Route::get('/', [ViewDataController::class, 'index']);
Route::get('/register', [ViewDataController::class, 'register']);
Route::get('/products', [ViewDataController::class, 'indexProduct']);
Route::get('/products/{id}', [ViewDataController::class, 'indexCategoryProduct']);
Route::get('/gallery', [ViewDataController::class, 'indexGallery']);
Route::get('/contact', [ViewDataController::class, 'indexContact']);
Route::get('/profile/{id}', [ViewDataController::class, 'indexProfile']);
Route::post('/profile/{id}/update', [ViewDataController::class, 'updateProfile'])->name('profileUpdate');

// cart
Route::get('/cart/{id}', [CartController::class, 'index'])->name('cart');
Route::post('/cart/{id}', [CartController::class, 'createCart']);
Route::post('/minus/{id}', [CartController::class, 'minus']);
Route::post('/plus/{id}', [CartController::class, 'plus']);
Route::post('/destroy/{id}', [CartController::class, 'destroy']);


// booking
Route::get('/checkout/{id}', [BookingController::class, 'index']);
Route::post('/payment/{id}', [BookingController::class, 'indexPay']);
Route::post('/booking/{id}', [BookingController::class, 'payment']);
Route::get('/booking/{id}', [BookingController::class, 'bookingIndex']);
Route::post('/booking/feedback/{id}', [BookingController::class, 'bookingFeedback']);


#testimoni
Route::get('/payment', function () {
    return view('booking.payment');
});

#admin
Route::get('/admin/user_management', [UserManagementController::class, 'index']);
Route::post('/admin/delete/{user}', [UserManagementController::class, 'destroy']);

Route::get('/admin/gallery', [GalleryController::class, 'galleryAdmin']);
Route::get('/admin/gallery/create', [GalleryController::class, 'create']);
Route::post('/admin/gallery', [GalleryController::class, 'store']);
Route::get('/admin/gallery/{gallery}/edit', [GalleryController::class, 'edit']);
Route::post('/admin/gallery/{gallery}', [GalleryController::class, 'update']);
Route::post('/admin/gallery/{gallery}/delete', [GalleryController::class, 'destroy']);

Route::get('/admin/product', [ProductController::class, 'productAdmin']);
Route::get('/admin/product/create', [ProductController::class, 'create']);
Route::post('/admin/product', [ProductController::class, 'store']);
Route::get('/admin/product/{product}/edit', [ProductController::class, 'edit']);
Route::post('/admin/product/{product}', [ProductController::class, 'update']);
Route::post('/admin/product/{product}/delete', [ProductController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/coba', [APIController::class, 'index']);
