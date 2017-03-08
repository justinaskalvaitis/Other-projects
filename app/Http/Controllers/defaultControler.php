<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class defaultControler extends Controller
{
    public function show(){
	$date = new \DateTime();
	return view('date', ['date' =>$date->format('Y-m-d')]);
    }

    public function name($name = '3wa')
    {
        $firstLetter = mb_strtoupper(mb_substr($name, 0, 1));
        $name = $firstLetter . mb_substr($name, 1);

        return view('date', [
            'date' => $name,
            'slogan' => 'Mano vardas'
        ]);
    }
}
