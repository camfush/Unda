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

Route::group(['middleware' => ['auth']], function() {
  Route::get('/upload', 'PostController@create')->name('upload');
  Route::get('/account', 'AccountController@show');
  //Route::get('/account', 'UserController@account')->name('account');
  //Route::get('/account/edit', 'AccountController@account')->name('account-edit');
});

Route::resource('posts', 'PostController', ['except' => ['edit', 'update']]);
Route::resource('comments', 'CommentController', ['except' => ['edit', 'update']]);
