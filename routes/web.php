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
//Route::get('/onboarding', function () {
//    return view('/home/onboarding');
//});
Route::resources([
	'onboarding' => 'OnBoardingController',
]);

Route::get('/teachers', function () {
    return view('/home/teachers');
})->name('teachers');
Route::get('/teacher', function () {
    return view('/home/teacher');
});
Route::get('/settings/profile', function () {
    return view('/settings/profile');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

//middleware
Route::prefix("/")->middleware(['checkLogin'])->group(function(){
	Route::resources([
		'dashboard'     =>   'DashBoardController',
	]);
});
Route::get('/settings/profile', 'ProfileController@index')->middleware('auth')->name('profile');
Route::post('/settings/update_information', 'ProfileController@update_information')->middleware('auth')->name('profile');
Route::post('/settings/update_comunication', 'ProfileController@update_comunication')->middleware('auth')->name('update_comunication');
Route::post('/settings/update_student_information', 'ProfileController@update_student_information')->middleware('auth')->name('update_student_information');
Route::post('/settings/update_language_information', 'ProfileController@update_language_information')->middleware('auth')->name('update_language_information');
Route::get('/settings/account','SettingController@account')->name('settings_account');

Route::get('/profile', 'ProfileController@index')->middleware('auth')->name('profile');

Route::get('/settings/notification', function () {
    return view('/settings/notification');
});

Route::get('/lessons/sessions', function () {
    return view('/lessons/lessons');
});

Route::get('/user', function () {
    return view('/home/user');
});

Route::get('/recharge', function () {
    return view('/home/recharge');
});

Route::get('/checkout', function () {
    return view('/home/checkout');
});

Route::get('/contacts/teacher', function () {
    return view('/home/contacts');
});

Route::get('/finance/overview', function () {
    return view('/home/finance');
});
Route::prefix('/admin')->group(function (){
     Route::get('/', 'AdminController@index')->name('admin-dashboard');
});
Route::get('/discussions', function () {
    return view('/home/discussions');
});
