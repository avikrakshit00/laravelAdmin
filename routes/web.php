<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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

// Route::name('admin.')->group(function () {

// Admin Route
Route::get('admin.login', [AdminController::class,'login'])->name('login');
Route::post('admin.login', [AdminController::class,'loginSuccess']);
Route::get('admin.register', [AdminController::class,'register'])->name('register');
Route::post('admin.register', [AdminController::class,'registrationForm']);
Route::get('admin.dashboard', [AdminController::class,'dashboard'])->name('dashboard');

// Category Route
Route::get('admin.add_category', [CategoryController::class,'addCategory'])->name('add_category');
Route::post('admin.add_category', [CategoryController::class,'storeCategory']);

Route::get('admin.manage_category', [CategoryController::class,'manageCategory'])->name('manage_category');

// });



