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

Route::get('/')->name('welcome')->uses("DatabaseController@getData");
Route::get('/pet.profile/{id}')->name('petprofile')->uses('DatabaseController@showPet');
Route::post('/signin')->name('signin')->uses('DatabaseController@signin');
Route::post('/register')->name('registeruser')->uses('DatabaseController@registerUser');
Route::get('/myprofile/{id}')->name('myprofile')->uses('DatabaseController@myprofile');
Route::get('/signout')->name('signout')->uses('DatabaseController@signOut');
Route::post('/addpet')->name('addpet')->uses('DatabaseController@addPet');
Route::get('/sendmessage/{id}')->name('sendmessage')->uses('DatabaseController@sendMessage');
Route::get('/allpets')->name('allpets')->uses('DatabaseController@showAllPets');
Route::post('/searchpets')->name('searchpets')->uses('DatabaseController@searchPets');