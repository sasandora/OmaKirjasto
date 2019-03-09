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
    return view('sivut/kirjaLisaysForm');
});

Route::get('/kirjoittajalisays', function () {
    return view('sivut/kirjoittajaLisaysForm');
});

Route::get('/kustantajalisays', function () {
    return view('sivut/kustantajaLisaysForm');
});

Route::get('/sarjalisays', function () {
    return view('sivut/kirjasarjaLisaysForm');
});

Route::get('/toimittajalisays', function () {
    return view('sivut/toimittajaLisaysForm');
});

Route::get('/tilauslisays', function () {
    return view('sivut/tilausLisaysForm');
});

Route::get('/toimituspaikkalisays', function () {
    return view('sivut/toimituspaikkaLisaysForm');
});