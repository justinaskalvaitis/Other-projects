<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class defaultControler extends Controller
{
    public function show(){
	$date = new \DateTime();
	return view('date', ['date' =>$date->format('Y-m-d')]);
    }
}
