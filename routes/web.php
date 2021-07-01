<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('home');
})->name('dashboard');

//admin
Route::get('/',[\App\Http\Controllers\WebController::class,"home"]);
Route::get('/aboutus',[\App\Http\Controllers\WebController::class,"aboutUs"]);
Route::get('/categories',[\App\Http\Controllers\CategoryController::class,"all"]);
Route::get('/categories/new',[\App\Http\Controllers\CategoryController::class,"form"]);
Route::post('/categories/save',[\App\Http\Controllers\CategoryController::class,"save"]);
Route::get('/categories/remove/{id}',[\App\Http\Controllers\CategoryController::class,"delete"]);
Route::get('/categories/edit/{id}',[\App\Http\Controllers\CategoryController::class,"edit"]);
Route::post('/categories/update/{id}',[\App\Http\Controllers\CategoryController::class,"update"]);

Route::get('/products',[\App\Http\Controllers\ProductController::class,"all"]);
Route::get('/products/new',[\App\Http\Controllers\ProductController::class,"form"]);
Route::post('/products/save',[\App\Http\Controllers\ProductController::class,"save"]);
Route::get('/products/remove/{id}',[\App\Http\Controllers\ProductController::class,"delete"]);
Route::get('/products/edit/{id}',[\App\Http\Controllers\ProductController::class,"edit"]);
Route::post('/products/update/{id}',[\App\Http\Controllers\ProductController::class,"update"]);

Route::get('/user',[\App\Http\Controllers\UserController::class,"all"]);
Route::get('/user/new',[\App\Http\Controllers\UserController::class,"form"]);
Route::post('/user/save',[\App\Http\Controllers\UserController::class,"save"]);
Route::get('/user/remove/{id}',[\App\Http\Controllers\UserController::class,"delete"]);
Route::get('/user/edit/{id}',[\App\Http\Controllers\UserController::class,"edit"]);
Route::get('/user/update/{id}',[\App\Http\Controllers\UserController::class,"update"]);

