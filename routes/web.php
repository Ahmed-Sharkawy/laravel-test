<?php

// use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix("home")->group(function () {
//     Route::get("index", [HomeController::class, "index"]);
//     Route::get("add",  [HomeController::class, "add"])->name("home.add");
//     Route::post("stor", [HomeController::class, "stor"]);
//     Route::get("delete/{id}", [HomeController::class, "delete"]);
//     Route::get("edit/{id}", [HomeController::class, "edit"]);
//     Route::post("update", [HomeController::class, "update"]);
// });


// Route::prefix("product")->group(function () {
    //     Route::get("index", [ProductController::class, "index"]);
    //     Route::get("add", [ProductController::class, "add"]);
    //     Route::post("stor", [ProductController::class, "stor"]);
    //     Route::get("edit/{id}", [ProductController::class, "edit"]);
    //     Route::post("update", [ProductController::class, "update"]);
    //     Route::get("delete/{id}", [ProductController::class, "delete"]);
    // });

Route::resource("home",CrudController::class);

Route::resource("product",ProductsController::class);