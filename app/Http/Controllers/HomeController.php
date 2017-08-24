<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

    public function uppercase($word) 
    {
        $data['word'] = strtoupper($word);

        return view('uppercase', $data);
    }

    public function lowercase($word) {
        $data['word'] = strtolower($word);
        return view('lowercase', $data);
    }

    public function increment($number)
    {
        if(is_numeric($number)) {
            $number += 1;
        } else {
            $number = 1;
        }

        if ($number > 5) {
            return redirect()->action('HomeController@resetToZero');
        }

        $data['number'] = $number;

        return view('increment')->with($data);
    }

    public function resetToZero()
    {
        $data['number'] = 0;
        return view('increment')->with($data);
    }

    public function add($num1, $num2) 
    {
        if(is_numeric($num1) && is_numeric($num2)) {
            return $num1 + $num2;
        }
    }

    public function sayHello($name = "World")
    {
        if($name == "Chris") {
            return redirect('/');
        } else {
            $data['fullName'] = $name;
            return view('welcome', $data);
        }
    }

    public function rolldice($guess) 
    {
        $data = []; 
        $data['random'] = mt_rand(1, 6);
        $data['guess'] = $guess;

        $data['numbers'] = range(1, 100);

        return view('roll-dice', $data);
    }

}