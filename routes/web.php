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

Route::get('/', ['uses'=>'MainController@index', 'as'=>'index']);

Route::match(['get', 'post'], '/uslugi', ['uses'=>'UslugiController@index', 'as'=>'uslugi']);
Route::match(['get', 'post'], '/kontakti', ['uses'=>'KontaktiController@index', 'as'=>'kontakti']);
Route::match(['get', 'post'], '/blog', ['uses'=>'BlogController@index', 'as'=>'blog']);
Route::match(['post'], '/send', ['uses'=>'MainController@sendMesseage', 'as'=>'send']);
