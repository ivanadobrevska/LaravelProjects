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

Route::get('/')->name('welcome')->uses("HomeController@getCards");
Route::get('/singlecard/{id}')->name('singlecard')->uses('HomeController@getSingleCard');
Route::get('/buycard/{id}')->name('buycard')->uses('HomeController@buyCard');
Route::post('/submitcard')->name('submitcard')->uses('HomeController@submitCard');
Route::get('/adddiscount')->name('adddiscount')->uses('HomeController@addDiscount');
Route::post('/adddiscount')->name('addcard')->uses('HomeController@addCard');
Route::get('/login')->name('login')->uses('AdminController@logIn');
Route::post('/signin')->name('signin')->uses('AdminController@signIn');
Route::get('/approvecard/{id}')->name('approvecard')->uses('AdminController@approveCard');
Route::get('/disapprovecard/{id}')->name('disapprovecard')->uses('AdminController@disapproveCard');
Route::get('/editcard/{id}')->name('editcard')->uses('AdminController@editCard');
Route::post('/changecard/{id}')->name('changecard')->uses('AdminController@changecard');
