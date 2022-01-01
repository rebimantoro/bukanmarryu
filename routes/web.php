<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\GalleryController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/products', [App\Http\Controllers\ProductController::class, 'productIndex']);
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'galleryIndex']);
Route::get('/contact', [App\Http\Controllers\ProductController::class, 'contactIndex']);


#admin
Route::get('/admin/user_management', [UserManagementController::class, 'index']);
Route::post('/admin/delete/{user}', [UserManagementController::class, 'destroy']);

Route::get('/admin/gallery', [GalleryController::class, 'galleryAdmin']);
Route::get('/admin/gallery/create', [GalleryController::class, 'create']);
Route::post('/admin/gallery', [GalleryController::class, 'store']);
Route::get('/admin/gallery/{gallery}/edit', [GalleryController::class, 'edit']);
Route::post('/admin/gallery/{gallery}', [GalleryController::class, 'update']);
Route::post('/admin/gallery/{gallery}/delete', [GalleryController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
