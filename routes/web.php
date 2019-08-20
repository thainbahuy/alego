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
    //route show view
    Route::get('dashboard', 'DashboardController@index')->name('view.admin.index');

    Route::get('event/addnew', 'DashboardController@showAddNewEvent')->name('view.admin.event.addnew');
    Route::get('event/edit/{id}', 'DashboardController@showEditEvent')->name('view.admin.event.edit');

    Route::get('submenu/addnew', 'DashboardController@showAddNewSubMenu')->name('view.admin.submenu.addnew');
    Route::get('submenu/edit/{id}', 'DashboardController@showEditSubMenu')->name('view.admin.submenu.edit');

    Route::get('menu/addnew', 'DashboardController@showAddNewMenu')->name('view.admin.menu.add');
    Route::get('menu/edit/{id}', 'DashboardController@showEditMenu')->name('view.admin.menu.edit');

    Route::get('background', 'BackgroundController@index')->name('view.admin.background.list_background');
    Route::get('background/addnew', 'BackgroundController@showAddNewBackground')->name('view.admin.background.add');

    Route::get('member', 'MemberController@index')->name('view.admin.member.list_member');
    Route::get('member/addnew', 'MemberController@showAddMember')->name('view.admin.member.add');

    //route ajax,controller
    //Event
    Route::get('event/delete', 'EventController@deleteEventById')->name('admin.index.delete');
    Route::post('event/addnew', 'EventController@addNewEventFilm')->name('admin.event.addnew');
    Route::post('event/editevent', 'EventController@updateEventFilm')->name('admin.event.edit');

    //SubMenu
    Route::get('submenu/delete', 'SubMenuController@deleteSubMenu')->name('admin.index.submenu.delete');
    Route::post('submenu/addnew', 'SubMenuController@addNewSubMenu')->name('admin.submenu.add');
    Route::post('submenu/editsubmenu', 'SubMenuController@updateSubMenu')->name('admin.submenu.edit');

    //menu
    Route::get('menu/delete', 'MenuController@deleteMenuById')->name('admin.index.menu.delete');
    Route::post('menu/addnew', 'MenuController@addNewMenu')->name('admin.menu.add');
    Route::post('menu/edit', 'MenuController@editMenuById')->name('admin.menu.edit');

    //background
    Route::post('background/addnew', 'BackgroundController@addNewBackground')->name('admin.background.add');
    Route::get('background/delete', 'BackgroundController@deleteBackgroundId')->name('admin.background.list_background.delete');

    //member
    Route::post('member/addnew', 'MemberController@addNewMember')->name('admin.member.add');
    Route::get('member/delete', 'MemberController@deleteBackgroundId')->name('admin.member.list_member.delete');


});

Route::namespace('Auth')->group(function () {
    //Auth
    Route::get('authentication/admin/login', 'LoginController@showLoginForm')->name('view.admin.Auth.login');
    Route::post('authentication/admin/login', 'LoginController@login')->name('admin.Auth.login');
    Route::get('authentication/admin/logout', 'LoginController@logout')->name('logout');
    Route::get('authentication/admin/forgot-password', 'ForgotPasswordController@showLinkRequestForm')->name('view.admin.Auth.forgotpass');
    Route::post('authentication/admin/forgot-password', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.Auth.forgotpass');
    Route::post('authentication/admin/forgot-password', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.Auth.forgotpass');
    Route::get('authentication/admin/reset-password/{token}', 'ResetPasswordController@showResetForm')->name('resetpass');
    Route::post('authentication/admin/reset-password', 'ResetPasswordController@reset')->name('admin.Auth.resetpass');
});
//Route::get('ABC',function(){
//    echo Hash::make('thaibahuy');
//});
