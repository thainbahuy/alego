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

use Illuminate\Support\Facades\Session;

Route::get('/test', function () {
    return view('welcome');
});

Route::get('language/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
})->name('language');

//home page
Route::get('/home', 'Website\HomeController@index')->name('web.first-home');
Route::get('/', 'Website\HomeController@index')->name('web.first-home');

//event detail page
Route::get('/detail/{event}.html', 'Website\EventDetailController@index')->name('web.event-detail');

//event type page
Route::get('/{menu}/{sub_menu}', 'Website\HomeController@loadEventByMenu')->name('web.menu.submenu');

Route::get('/about-us', 'Website\AboutUsController@index');
Route::get('/contact-us', 'Website\ContactController@index');

