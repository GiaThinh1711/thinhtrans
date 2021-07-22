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

Route::get('/user',[\App\Http\Controllers\UserController::class,"all"]);
Route::get('/user/new',[\App\Http\Controllers\UserController::class,"form"]);
Route::post('/user/save',[\App\Http\Controllers\UserController::class,"save"]);
Route::get('/user/remove/{id}',[\App\Http\Controllers\UserController::class,"delete"]);
Route::get('/user/edit/{id}',[\App\Http\Controllers\UserController::class,"edit"]);
Route::get('/user/update/{id}',[\App\Http\Controllers\UserController::class,"update"]);
//api danh sach san pham
Route::get("/product-list",[WebController::class,"productList"]);

// web

Route::get("trang-chu",[HomeController::class,"getTrangChu"]);
Route::get("about",[HomeController::class,"getAbout"]);
Route::get("bread",[HomeController::class,"getBread"]);
Route::get("checkout",[HomeController::class,"getCheckout"]);
Route::get("events",[HomeController::class,"getEvents"]);
Route::get("faqs",[HomeController::class,"getFaqs"]);
Route::get("kitchen",[HomeController::class,"getKitchen"]);
Route::get("login",[HomeController::class,"getLogin"]);
Route::get("mail",[HomeController::class,"getMail"]);
Route::get("payment",[HomeController::class,"getPayment"]);
Route::get("privacy",[HomeController::class,"getPrivacy"]);
Route::get("products",[HomeController::class,"getProducts"]);
Route::get("services",[HomeController::class,"getServices"]);
Route::get("single",[HomeController::class,"getSingle"]);
Route::get("vegetables",[HomeController::class,"getVegetables"]);
