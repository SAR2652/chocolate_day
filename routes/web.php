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


Route::get('/', 'PagesController@welcome');
Route::get('/purchasing/{c_id}', [
    'as' => 'purchasing', 'uses' => 'ChocolateController@index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/google', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\RegisterController@handleProviderCallback');
Route::get('/cart/{c_id}', [
    'as' => 'cart', 'uses' => 'PagesController@cart'
]);

Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');

Route::get('/thank_you', [
    'as' => 'thank_you', 'uses' => 'PagesController@thank_you'
]);

Route::get('/welcome', [
    'as' => 'welcome', 'uses' => 'PagesController@welcome'
]);

Route::get('send','MailController@send');

Route::post('/insertcart',[
    'as' =>'insertcart','uses'=>'PagesController@insertcart']);