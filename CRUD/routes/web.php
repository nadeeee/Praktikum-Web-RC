<?php

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

//Route::get('/', 'App\Http\Controllers\HomeController@home')->name('home');

//Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('about');

Route::get('/', 'App\http\Controllers\HomeController@index');

Route::get('/show', 'App\Http\Controllers\ProductsController@show');

Route::get('/products', 'App\Http\Controllers\ProductsController@viewProducts');

Route::get('/editproducts/{id}', 'App\Http\Controllers\ProductsController@editProducts');

Route::post('/store', 'App\Http\Controllers\ProductsController@store');

Route::patch('/update/{id}', 'App\Http\Controllers\ProductsController@update');

Route::delete('/delete/{id}', 'App\Http\Controllers\ProductsController@delete');

Route::get('/create-category','App\Http\Controllers\categoryController@create');

Route::get('/category', 'App\Http\Controllers\categoryController@index');

Route::post('/category-store','App\Http\Controllers\categoryController@store');

Route::delete('/category-delete/{id}','App\Http\Controllers\categoryController@delete');


