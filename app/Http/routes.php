<?php

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

Route::get('/', 'HomeController@showWelcome');

Route::get('/uppercase/{word}', 'HomeController@uppercase');

Route::get('/lowercase/{word}', 'HomeController@lowercase');

Route::get('/increment/{number}', 'HomeController@increment');

// Rotue w/ required parameters
Route::get('/add/{num1}/{num2}', 'HomeController@add');

// Optional parameter w/ default value
// Route::get('/sayhello/{name}', 'HomeController@showWelcome');





Route::get('/rolldice/{guess}', 'HomeController@rolldice');

Route::get('/sample/{str}', 'SampleController@firstLetter');


Route::get('/process/{num}', 'SampleController@processNum');
Route::get('/double/{num}', 'SampleController@doubleNum');
Route::get('/triple/{num}', 'SampleController@tripleNum');








