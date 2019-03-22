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

Route::view('/', 'sivut/welcome');
Route::view('tilaukset', 'sivut/welcome');

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

//Reitittää kaikki CRUD-jutut kontrollerille kansioon app/http/controllers/teoksetcontroller.php
Route::resource('teos', 'TeoksetController');

Route::resource('sarjat', 'SarjaController');

Route::resource('kirjoittajat', 'KirjoittajaController');

Route::resource('kustantajat', 'KustantajaController');

Route::resource('kuvat', 'KuvaController');

Route::resource('toimittajat', 'ToimittajaController');

Route::resource('toimituspaikat', 'KauppapaikkaController');

Route::resource('tilaukset', 'ToimitusController');