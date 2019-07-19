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

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/home', 'Website\HomeController@index');
Route::get('/sub', 'Website\HomeController@subMenu');
Route::get('/detail', 'Website\EventDetailController@index');
Route::get('/about-us', 'Website\AboutUsController@index');
Route::get('/contact-us', 'Website\ContactController@index');

