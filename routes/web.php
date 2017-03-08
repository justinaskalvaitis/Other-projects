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

Route::get('siandien', function () {
	$date = new DateTime();
    return 'siandienos data yra ' . $date->format('Y-m-d');
});

Route::get('as-esu/{name?}', function ($name = '3wa'){
	return 'Mano vardas - '. ucfirst($name);
});