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

Route::get('language/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
})->name('language');


Route::namespace('Website')->group(function () {
    //home page
    Route::get('/home', 'HomeController@index')->name('web.first-home');
    Route::get('/', 'HomeController@index')->name('web.first-home');

    //event detail page
    Route::get('/detail/{event}.html', 'EventDetailController@index')->name('web.event-detail');

    //event type page
    Route::get('type/{menu}/{sub_menu}', 'HomeController@loadEventByMenu')->name('web.menu.submenu');

    Route::get('/about-us', 'AboutUsController@index');
    Route::get('/contact-us', 'ContactController@index');

});

Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('admin.index');



    //route ajax
    Route::get('event/delete', 'EventController@deleteEventById')->name('admin.index.delete');

});

