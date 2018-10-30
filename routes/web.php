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
    return view('films.films');
});

Route::get('/','FilmsController@films');

Route::get('/create','FilmsController@create');

Route::get('/films_description','FilmsController@films_description');

Route::get('/login','FilmsController@login');

Route::get('/register','FilmsController@register');

Route::get('/logout','FilmsController@logout');
