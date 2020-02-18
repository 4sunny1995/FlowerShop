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
//['verify'=>true]
Auth::routes();
Route::get('/login','UserController@getlogin')->name('getLogin');
Route::post('/login','UserController@postLogin')->name('postLogin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','UserController@logout')->name('logout');
Route::get('/profile','UserController@detail')->name('profile');
Route::get('/cart','CartController@index')->name('cart');
Route::post('/AddItem','CartController@AddItem');
Route::get('/changePassword','UserController@changePassword')->name('changePassword');
Route::get('/history','OrderController@index')->name('history');
Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');
//tab
// Route::get('/{category}','HomeController@getByCategory')->name('category');
Route::group(['prefix' => 'products'], function () {
    Route::get('bh','HomeController@getBH')->name('bh');
    Route::get('ch','HomeController@getCH')->name('ch');
    Route::get('lh','HomeController@getLH')->name('lh');

});
// Route::post('/login/{social}', );
