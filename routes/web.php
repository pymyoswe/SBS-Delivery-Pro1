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

Route::get('/',[
   'uses'=>'WelcomeController@index',
    'as'=>'/'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index')->name('post');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');

Route::resource('profile', 'ProfileController');

Route::resource('orders','OrderController');

Route::post('profile/update', 'ProfileController@updateProfile')->name('profile.update');