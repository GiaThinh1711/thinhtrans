<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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
Route::get('/',function (){
    return view('spa_view');
});

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
Route::get('/check',[\App\Http\Controllers\ProductController::class,"checkout"]);

Route::get('/user',[\App\Http\Controllers\UserController::class,"all"]);
Route::get('/user/new',[\App\Http\Controllers\UserController::class,"form"]);
Route::post('/user/save',[\App\Http\Controllers\UserController::class,"save"]);
Route::get('/user/remove/{id}',[\App\Http\Controllers\UserController::class,"delete"]);

// User page
Route::get("user/home",[HomeController::class,"getTrangChu"]);
Route::get("user/about",[HomeController::class,"getAbout"]);
Route::get("user/bread",[HomeController::class,"getBread"]);
Route::get("user/checkout",[HomeController::class,"getCheckout"]);
Route::get("user/events",[HomeController::class,"getEvents"]);
Route::get("user/faqs",[HomeController::class,"getFaqs"]);
Route::get("user/kitchen",[HomeController::class,"getKitchen"]);
Route::get("user/login",[HomeController::class,"getLogin"]);
Route::get("user/mail",[HomeController::class,"getMail"]);
Route::get("user/payment",[HomeController::class,"getPayment"]);
Route::get("user/privacy",[HomeController::class,"getPrivacy"]);
Route::get("user/products",[HomeController::class,"getProducts"]);
Route::get("user/services",[HomeController::class,"getServices"]);
Route::get("user/single",[HomeController::class,"getSingle"]);
Route::get("user/vegetables",[HomeController::class,"getVegetables"]);
