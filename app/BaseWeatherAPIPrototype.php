<?php
/**
 * Created by PhpStorm.
 * User: --
 * Date: 12.07.2018
 * Time: 10:35
 */

namespace app;

use Illuminate\Support\Facades\Storage;
use GuzzleHttp;


abstract class BaseWeatherAPIPrototype
{
     protected $appid;
     /**
      * @param string
      * @param mixed
      * @return bool
      */
     protected function  saveDataToFile($filename,$content)
     {
          $json = GuzzleHttp\json_encode($content);

          return file_put_contents($filename, PHP_EOL .$json, FILE_APPEND);
     }

    
      abstract function postRequest();

     /**
      * @param string
      * @return void
      */
      public function execute($filename)
      {
           $result = $this->postRequest();
           
           $this->saveDataToFile($filename,$result);
      }
}