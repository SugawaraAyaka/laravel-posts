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

 Route::group(['middleware' => 'auth'], function() {
  Route::post('/comments/store', 'CommentsController@store')->name('comments.store');
  Route::get('/', 'PostsController@index')->name('posts.index');
  Route::get('logout', 'Auth\LoginController@logout')->name('logout');
  Route::get('user/{id}', 'UsersController@show')->name('users.show');
  Route::get('users/{users}/edit', 'UsersController@edit')->name('users.edit');
  Route::post('users/{users}', 'UsersController@update')->name('users.update');
  Route::get('post/new', 'PostsController@create')->name('posts.create.');
  Route::post('post', 'PostsController@store')->name('posts.store');
 Route::get('post/{id}/edit', 'PostsController@edit')->name('post.edit');
 Route::post('post/{id}', 'PostsController@update')->name('post.update');
 Route::get('post/{id}', 'PostsController@destroy')->name('post.destroy');
 });

  Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
  Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
  Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
  Route::post('login', 'Auth\LoginController@login')->name('login.post');
  Route::get('logout', 'Auth\LoginController@logout')->name('logout');

