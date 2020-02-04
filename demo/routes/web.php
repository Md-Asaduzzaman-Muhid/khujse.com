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

//Route::get('/', function () {
//    return view('welcome');
//});


//Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','TodoController@index')->name('todo.index');
Route::post('/todo/store', 'TodoController@store')->name('todo.store');
Route::get('/todo/delete/{id}','TodoController@delete')->name('todo.delete');
Route::get('/todo/edit/{id}','TodoController@edit')->name('todo.edit');
Route::get('/todo/view/{id}','TodoController@view')->name('todo.view');

Route::get('/user/list','UserController@list')->name('user.list');
Route::get('/user/create','UserController@create')->name('user.create');
Route::post('/user/store', 'UserController@store')->name('user.store');
Route::get('/user/delete/{id}','UserController@delete')->name('user.delete');
Route::get('/user/detail/{id}','UserController@detail')->name('user.detail');
Route::get('/user/make-admin/{id}','UserController@makeAdmin')->name('user.make.admin');
Route::get('/user/make-user/{id}','UserController@makeUser')->name('user.make.user');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
