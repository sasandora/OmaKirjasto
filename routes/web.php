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
    return view('sivut/welcome');
});

Route::get('kirjat', function () {
    return view('sivut/kirjat');
});

Route::get('tilaukset', function () {
    return view('sivut/tilaukset');
});
