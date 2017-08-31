<?php

use \App\Avenger;

/*
|--------------------------------------------------------------------------
| `Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Test route for query builder lecture
Route::get('/builder', 'PostsController@testBuilder');

// The following routes are unrelated to the final Reddit clone example
Route::get('/', 'HomeController@showWelcome');

// Resource route for requests for Posts
Route::resource('/posts', 'PostsController');

Route::resource('/users', 'UsersController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

