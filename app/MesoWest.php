<?php
/**
 * Created by PhpStorm.
 * User: --
 * Date: 13.07.2018
 * Time: 11:39
 */

namespace App;

use GuzzleHttp;
use Carbon\Carbon;
use Mockery\CountValidator\Exception;
use Illuminate\Support\Facades\Storage;

class MesoWest extends  BaseWeatherAPIPrototype
{

    protected $appid ="6d87a6d564f745a8bdcef8f3f111150b";
    
    public function  postRequest()
    {


        $start_date = Carbon::now()->format('Y m d H');
        $vowels = ["-"," ",":"];
        $postfix = '00';
        $start_date_str = str_replace($vowels,"", $start_date);
        $start_date_str .= $postfix;

        $end_date = Carbon::now()->addHour(2)->format('Y m d H');
        $end_date_str = str_replace($vowels,"", $end_date);
        $end_date_str .= $postfix;
        $vars = ['air_temp','pressure'];
        $state_id= 'FREUT';

        $request ="http://api.mesowest.net/v2/stations/timeseries?".
            "stid=$state_id&token=$this->appid&start=$start_date_str&end=$end_date_str&vars=$vars[0],$vars[1]";

        $resource= file_get_contents($request);
       // dd($resource);

        return $resource;


    }
    

}