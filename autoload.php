<?php
require ('App/http/routes.php');

if(isset($GLOBAL['get'])){

  
    if($method = \App\Api\Route::checkGet($GLOBAL['get'])){
        dd($method);
        preg_match_all('/([^@]|\n)+/', $method, $match);
        if($match[0][0]){
            if($match[0][1]){
                $addClass = 'App\\http\\controllers\\'.ucfirst($match[0][0]);
                $cfunctionG = $match[0][1];
               $callMethod = new $addClass();
               //$callMethod->$cfunctionG();
            }
        }
    }
}


