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

Route::get('/kirjalisays', function () {
    return view('kirjaLisaysForm');
});

Route::get('/kirjoittajalisays', function () {
    return view('kirjoittajaLisaysForm');
});

Route::get('/kustantajalisays', function () {
    return view('kustantajaLisaysForm');
});

Route::get('/sarjalisays', function () {
    return view('kirjasarjaLisaysForm');
});

Route::get('/toimittajalisays', function () {
    return view('toimittajaLisaysForm');
});

Route::get('/tilauslisays', function () {
    return view('tilausLisaysForm');
});

Route::get('/toimituspaikkalisays', function () {
    return view('toimituspaikkaLisaysForm');
});