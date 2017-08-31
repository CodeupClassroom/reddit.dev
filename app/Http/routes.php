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

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('create-user', function() {
	$user = new \App\User();
	$user->name = "admin";
	$user->email = "admin@codeup.com";
	$user->password = "password";
	$user->save();
});


// // Routes below are for demo purposes, not the application.
Route::get('/uppercase/{word}', 'HomeController@uppercase');
Route::get('/lowercase/{word}', 'HomeController@lowercase');
Route::get('/increment/{number}', 'HomeController@increment');
Route::get('/add/{num1}/{num2}', 'HomeController@add');
Route::get('/sayhello/{name}', 'HomeController@showWelcome');
Route::get('/rolldice/{guess}', 'HomeController@rolldice');
Route::get('/sample/{str}', 'SampleController@firstLetter');
Route::get('/process/{num}', 'SampleController@processNum');
Route::get('/double/{num}', 'SampleController@doubleNum');
Route::get('/triple/{num}', 'SampleController@tripleNum');
Route::get('zero', 'HomeController@resetToZero');

// // Lecture example resource route
// Route::resource('dogs', 'DogsController');

// Route::get('orm-test', function(){

// adding a new resource	
	// $dog = new App\Models\Dog();
	// $dog->name = 'Sparky';
	// $dog->breed='Pug';
	// $dog->age  = 2;
	// $dog->save();

// getting all records of a resource

	// $dogs = App\Models\Dog::all();

	// foreach($dogs as $dog) {
	// 	echo $dog->name;
	// }

	// dd($dogs);

// finding a single record

	// $dog = App\Models\Dog::find(1);
	// echo $dog->name;

// updating a resource

	// $dog = App\Models\Dog::find(1);

	// $dog->name = "Sporty";
	// $dog->save();


// delete a resource

	// $dog = App\Models\Dog::find(3);
	// $dog->delete();

// });









