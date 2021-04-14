<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModifyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\AddController;

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

Route::get("/products/{id}/edit", [ModifyController::class, "index"]);
Route::get("/products/{id}", [ProductController::class, "index"]);
Route::get("/product/add", [AddController::class, "index"]);
Route::get("/", [ListController::class, "index"]);

Route::redirect('/products', '/');

Route::post("/ModifyProduct", [ModifyController::class, "modifyProduct"]);
Route::post("/AddProduct", [AddController::class, "addProduct"]);
