<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post("/add_product",[\App\Http\Controllers\ProductController::class,"add_product"]);
Route::get("/get_all_product",[\App\Http\Controllers\ProductController::class,"get_all_product"]);
Route::get("/get_edit_product/{id}",[\App\Http\Controllers\ProductController::class,"get_edit_product"]);
Route::post("/update_product/{id}",[\App\Http\Controllers\ProductController::class,"update_product"]);
Route::get("/delete_product/{id}",[\App\Http\Controllers\ProductController::class,"delete_product"]);
