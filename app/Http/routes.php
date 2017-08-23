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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uppercase/{word}', function($word) {
    
    $data['word'] = strtoupper($word);

    return view('uppercase', $data);


});

Route::get('/increment/{number}', function($number) {
    if(is_numeric($number)) {
        return $number + 1;
    } else {
        return 1;
    }
});

Route::get('add/{num1}/{num2}', function($num1, $num2) {
    if(is_numeric($num1) && is_numeric($num2)) {
        return $num1 + $num2;
    }
});

// Route w/ required parameters
Route::get('/sayhello/{firstName}/{lastName?}', function($firstName, $lastName = "Bobberson") {

    $data['fullName'] = $firstName . " " . $lastName;

    return view('welcome', $data);
});

// Optional parameter w/ default value
Route::get('/sayhello/{name?}', function($name = "World") {
    if($name == "Chris") {
        return redirect('/');
    } else {
        $data['fullName'] = $name;
        return view('welcome', $data);
    }
});