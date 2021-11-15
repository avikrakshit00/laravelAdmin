<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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


// Admin Route
Route::get('admin.login', [AdminController::class,'login'])->name('login');
Route::post('admin.login', [AdminController::class,'loginSuccess']);
Route::get('admin.register', [AdminController::class,'register'])->name('register');
Route::post('admin.register', [AdminController::class,'registrationForm']);
Route::get('admin/dashboard', [AdminController::class,'dashboard'])->name('dashboard');

// Category Route
Route::get('admin/category/add', [CategoryController::class,'addCategory'])->name('addcategory');
Route::post('admin/category/add', [CategoryController::class,'storeCategory']);

Route::get('admin/category/manage', [CategoryController::class,'manageCategory'])->name('managecategory');
Route::get('admin/category/manage', [CategoryController::class,'showCategory']);

Route::get('admin/editcategory/{id}', [CategoryController::class,'editCategory'])->name('editcategory');
Route::post('admin/updatecategory/{id}', [CategoryController::class,'updateCategory'])->name('updatecategory');

Route::get('admin/deletecategory/{id}', [CategoryController::class,'deleteCategory'])->name('deletecategory');

Route::get('admin/product/add', [ProductController::class,'addProduct'])->name('addproduct');
Route::post('admin/product/add', [ProductController::class,'storeProduct'])->name('storeproduct');

Route::get('admin/product/manage', [ProductController::class,'manageProduct'])->name('manageproduct');

