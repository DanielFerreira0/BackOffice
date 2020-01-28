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

Route::get('register', 'ClienteController@index')->middleware('auth');
Route::get('/', 'ClienteController@index');
Route::get('/home', 'ClienteController@index')->middleware('auth');
Route::get('/', 'ClienteController@index')->middleware('auth');

Route::get('/new', 'ClienteController@new')->middleware('auth');
Route::post('/new', 'ClienteController@add')->middleware('auth');

Route::get('/editar/{id}','ClienteController@edit')->middleware('auth');
Route::post('/editar/{id}','ClienteController@update')->middleware('auth');

Route::get('/delete/{id}','ClienteController@delete')->middleware('auth');

Route::get('profile','ClienteController@profile');

Route::get('/newUser', 'UserController@newUser')->middleware('auth');
Route::post('/newUser', 'UserController@addUser')->middleware('auth');

Auth::routes();


//Route::get('/home', 'HomeController@index')->name('home');




