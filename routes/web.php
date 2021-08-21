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

Route::get('users/{users}/edit', 'UsersController@edit')->name('users.edit');
Route::pull('users/{users}', 'UsersController@update')->name('users.update');
Route::delete('destroy/{id}', 'PostsController@destroy')->name('post.destroy');
