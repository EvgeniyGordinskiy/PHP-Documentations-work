<?php
namespace App\Api;


abstract class Route
{
	static $routes = [];

	public static function get ($path, $class)
	{ 
		if(!is_string($path) && !is_string($class)){
			throw new \Exception();
		}
			self::$routes['get'][] = $path;
			self::$routes['get'][$path] = $class;
	}

	public static function checkGet ($get)
	{
		$get = trim($get,"/");
		$firstOffset = explode('/', trim($get,"/"));

		if(in_array($get, self::$routes['get'])){
			return  self::$routes['get'][$get];
		}elseif(isset($firstOffset[0])){

			foreach (self::$routes['get'] as $route){
				$trueRoute = [];
				$firstOffsetRoute = explode('/', trim($route,"/"));
				if(isset($firstOffsetRoute[0]) && $firstOffsetRoute[0] == $firstOffset[0] && count($firstOffsetRoute) == count($firstOffset)){
					if($firstOffsetRoute[0][0] != "{" && substr($firstOffsetRoute[0], -1) != "}"){
						foreach ($firstOffsetRoute as $key => $offset){
							if($key != 0){
								if($offset[0] != "{" && substr($offset, -1) != "}"){
									$trueRoute[] = 1;
								}
							}
						}
					}
				}
				if(in_array(1, $trueRoute)){
					return self::$routes['get'][$route];
					break(1);
				}
			}
		}
		return false;
	}
} 