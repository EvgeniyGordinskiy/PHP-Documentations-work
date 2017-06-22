<?php
namespace App\Api;

abstract class BaseController
{
   abstract public function home();
    
   abstract public function getFile($folder, $file);
    
}