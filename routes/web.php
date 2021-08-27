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

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::get('/', 'PostsController@index')->name('posts.index');

Route::get('posts/{id}/edit', 'PostsController@edit')->name('post.edit');
Route::post('posts/{id}', 'PostsController@update')->name('post.update');
Route::delete('posts/{id}', 'PostsController@destroy')->name('post.destroy');

Route::get('users/{users}/edit', 'UsersController@edit')->name('users.edit');
Route::post('users/{users}', 'UsersController@update')->name('users.update');

