<?php
namespace App\Api;


abstract class Route
{
	static $routes = [];

	public static function get ($path, $class, $call = 0)
	{ 
		if(!is_string($path)){
			throw new \Exception();
		}
		if(!$call){
			$routes['get'][] = $path;
		}
		
	}

	public static function checkGet ($get)
	{
		return in_array($get, self::routes);
	}
} 