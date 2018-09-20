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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/account', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
  Route::get('/account', 'UserController@show')->name('account');
  Route::get('/account/edit', 'UserController@edit')->name('account-edit');
});

Route::resource('posts', 'PostController', ['except' => ['edit', 'update']]);
Route::resource('comments', 'CommentController', ['except' => ['edit', 'update']]);
