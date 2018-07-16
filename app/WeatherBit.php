<?php
/**
 * Created by PhpStorm.
 * User: --
 * Date: 13.07.2018
 * Time: 11:40
 */

namespace App;


use Faker\Provider\DateTime;
use GuzzleHttp;
use Carbon\Carbon;

class WeatherBit extends  BaseWeatherAPIPrototype
{

    protected  $appid = "72f089a4aea5404b9a2d2c9d9d8262e5";
    
    public function  postRequest()
    {

        $start_date = Carbon::now()->format('Y-m-d');
        $end_date = Carbon::now()->addDay()->format('Y-m-d');
        
        $res = GuzzleHttp\json_decode(file_get_contents("http://api.weatherbit.io/v2.0/history/daily?city=Sevastopol,UA&".
        "start_date=$start_date&end_date=$end_date&key=" . $this->appid));

        return $res;

    }
    
    
}