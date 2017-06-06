<?php
namespace App;

Class Route implements Route
{
   private static $get = [];

	public static function get ($path, $method)
	{
         self::get[$path] = $method;
  
	}

	public function checkGet ($get)
	{
        return in_array($get, self::get);
	}

}