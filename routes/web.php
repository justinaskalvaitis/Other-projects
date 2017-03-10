<?php

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

Route::get('/', 'ProductController@index');

// Route::get('categories', 'defaultControler@categories');



Route::resource('products', 'ProductController');
Route::resource('categories', 'CategoryController');
Route::resource('manufacturers', 'ManufacturerController');

