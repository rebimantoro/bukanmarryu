<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ViewDataController;
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
Route::get('/gallery', [ViewDataController::class, 'indexGallery']);
Route::get('/contact', [ViewDataController::class, 'indexContact']);




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
