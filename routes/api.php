<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', 'App\Http\Controllers\Api\ProductApiController@index')->name('api.product.index');
Route::get('/products/{id}', 'App\Http\Controllers\Api\ProductApiController@show')->name('api.product.show');
Route::get('/categories', 'App\Http\Controllers\Api\CategoryApiController@index')->name('api.category.index');
Route::get('/categories/{id}', 'App\Http\Controllers\Api\CategoryApiController@show')->name('api.category.show');
Route::post('/categories', 'App\Http\Controllers\Api\CategoryApiController@store')->name('api.category.store');
Route::put('/categories/{id}', 'App\Http\Controllers\Api\CategoryApiController@update')->name('api.category.update');
