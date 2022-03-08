<?php

use App\Http\Controllers\home;
use App\Http\Controllers\product;
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

Route::prefix("home")->group(function () {
    Route::get("index", [home::class, "index"]);
    Route::get("add",  [home::class, "add"])->name("home.add");
    Route::post("stor", [home::class, "stor"]);
    Route::get("delete/{id}", [home::class, "delete"]);
    Route::get("edit/{id}", [home::class, "edit"]);
    Route::post("update", [home::class, "update"]);
});




Route::prefix("product")->group(function () {
    Route::get("index", [product::class, "index"]);
    Route::get("add", [product::class, "add"]);
    Route::post("stor", [product::class, "stor"]);
    Route::get("edit/{id}", [product::class, "edit"]);
    Route::post("update", [product::class, "update"]);
    Route::get("delete/{id}", [product::class, "delete"]);
});
