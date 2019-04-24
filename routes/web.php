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

Route::get('/', 'HomeController@index')->name('home');

Route::resource('flights', 'FlightsController');
Route::get('/user/profile', 'UserController@index')->middleware('verified');

Auth::routes(['verify' => true]);


Route::get('/admin/dashboard', 'AdminController@index');
Route::get('/hotel/dashboard', 'HotelAdminController@index');
Route::get('/rentacar/dashboard', 'RentacarAdminController@index');
Route::get('/avio/dashboard', 'AvioAdminController@index');

Route::any('/search', 'SearchController@search');