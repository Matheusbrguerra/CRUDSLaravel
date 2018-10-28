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

Route::get('/', 'PersonController@index')->name('people.index');

Auth::routes();

Route::get('profile', 'UserController@profile');

Route::post('profile', 'UserController@update_avatar');

Route::resource('people','PersonController');


//Route::get('/people/create','PersonController@create')->name('people.create');
//Route::get('/people/store','PersonController@store')->name('people.store');
Route::get('/home', 'PersonController@index')->name('people.index');
Route::get('/people','PersonController@index')->name('people.index');
Route::get('people/remover/{id}','PersonController@destroy');
//Route::get('people/editar/{id}','PersonController@edit')->name('people.edit');

