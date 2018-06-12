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

Route::get('/', 'IndexController@index');


Route::get('register', 'RegisterController@index');

Route::post('register/new', 'RegisterController@store');
Route::post('register/auth', 'RegisterController@store');

Route::get('product/{id}', 'CategoryController@index');
Route::get('product/{id}/{product}', 'ProductController@index');







Route::get('auth', 'AuthController@index');

Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', 'Auth\LoginController@logout');
Route::post('auth/register', 'Auth\RegisterController@register');




