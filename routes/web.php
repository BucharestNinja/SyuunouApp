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

Route::get('/selectCloset','ClosetInfoController@index')->name('index')->middleware('auth');

Route::get('/closetdetail','ClosetInfoController@show')->name('show')->middleware('auth');

Route::get('/closetDelete','ClosetInfoController@delete')->name('delete')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
