<?php

namespace App\Http\Controllers;

use App\MesoWest;
use App\WeatherBit;
use Illuminate\Http\Request;
use app\BaseWeatherAPIPrototype;
use Psr\Log\InvalidArgumentException;

class Main extends Controller
{

    
    public function show( Request $request)
    {

        switch ($request->get('weather-api'))
        {

            case 'west': $req = new MesoWest();
                 $req->execute('result.json');
                break;
            case 'bit': $req = new WeatherBit();
                  $req->execute('result1.json');
                break;
            default: throw new InvalidArgumentException();
        }

        return view('welcome');
    }
}
