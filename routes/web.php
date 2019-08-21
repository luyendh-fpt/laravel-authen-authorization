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

Route::get('/guest', 'GuestController@hello');
Route::get('/user', 'UserController@hello');
Route::get('/user-bye', 'UserController@goodbye');
Route::get('/admin', 'AdminController@hello');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
