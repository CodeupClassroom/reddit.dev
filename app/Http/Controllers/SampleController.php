<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    public function firstLetter($str)
    {
    	return $str[0];
    }

    public function processNum($num)
    {
    	if ($num == 1) {
    		return $num;
    	} else if ($num == 2) {
    		return redirect()->action('SampleController@doubleNum', array($num));
    	} else if ($num == 3) {
    		return redirect()->action('SampleController@tripleNum', array($num));
    	} else {
    		return "You just entered something other than the number 1, 2, or 3.";
    	}
    }

    public function doubleNum($num)
    {
    	return $num * 2;
    }


    public function tripleNum($num)
    {
    	return $num * 3;
    }

}
