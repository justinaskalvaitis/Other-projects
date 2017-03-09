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

Route::get('siandien', 'defaultControler@show');

Route::get('as-esu/{name?}', 'defaultControler@name');

Route::get('show', 'defaultControler@categories');

Route::get('products', 'defaultControler@products');

Route::get('/', 'defaultControler@products');