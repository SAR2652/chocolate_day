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

/*Route::get('/', function () {
    return view('pages.welcome');
});
*/

Route::get('/', 'PagesController@welcome');
Route::get('/purchasing','ChocolateController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/google', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\RegisterController@handleProviderCallback');
Route::get('cart','PagesController@cart');
//Route::get('choc_view','ChocolateController@index');