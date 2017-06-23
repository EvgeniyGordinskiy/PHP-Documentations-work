<?php
require ('App/http/routes.php');

if(isset($GLOBAL['get'])){
    
        if($method = \App\Api\Route::checkGet($GLOBAL['get'])) {
            $variables = [];

            if ($method[0] == '@' && $method[1] == '!') {
                $numberVariables = $method[2];
                $method = substr($method,3);
                $checkVariable = explode('/', trim($GLOBAL['get'],"/"));
                for($i = $numberVariables; $i > 0; $i--){
                    $variables[] = $checkVariable[count($checkVariable)-$i];
                }
            }

            if($variables){
                $requestGet = explode('@',$method);
                $addClass = 'App\\http\\controllers\\'.ucfirst($requestGet[0]);
                $cfunctionG = $requestGet[1];
                $callClass = new $addClass();
                call_user_func_array(array($callClass,$cfunctionG),$variables);
            }else{
                $requestGet = explode('@',$method);
                $addClass = 'App\\http\\controllers\\'.ucfirst($requestGet[0]);
                $cfunctionG = $requestGet[1];
                $callMethod = new $addClass();
                $callMethod->$cfunctionG();
            }
        }


           
}


