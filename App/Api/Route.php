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
		$requestGet = explode('@',$class);
		if(count($requestGet) == 2 && strlen($requestGet[0]) > 0 && strlen($requestGet[1]) > 0) {
			self::$routes['get'][] = $path;
			self::$routes['get'][$path] = $class;
		}else{
			throw new \Exception();
		}
	}

		public static function post ($path, $class)
	{ 
		if(!is_string($path) && !is_string($class)){
			throw new \Exception();
		}
		$requestPost = explode('@',$class);
		if(count($requestPost) == 2 && strlen($requestPost[0]) > 0 && strlen($requestPost[1]) > 0) {
			self::$routes['post'][] = $path;
			self::$routes['post'][$path] = $class;
		}else{
			throw new \Exception();
		}
	}

	public static function checkGet ($get)
	{
		if($get == "/"){
			return  self::$routes['get'][$get];
		}
		
		$get = trim($get,"/");
		$firstOffset = explode('/', trim($get,"/"));

		if(in_array($get, self::$routes['get'])){
			return  self::$routes['get'][$get];
		}elseif(isset($firstOffset[0])){

			foreach (self::$routes['get'] as $route){
				$trueRoute = false;
				$numberVariable = 0;
				$firstOffsetRoute = explode('/', trim($route,"/"));
				if(isset($firstOffsetRoute[0][0]) && $firstOffsetRoute[0] == $firstOffset[0] && count($firstOffsetRoute) == count($firstOffset)){
					if($firstOffsetRoute[0][0] != "{" && substr($firstOffsetRoute[0], -1) != "}"){
						foreach ($firstOffsetRoute as $key => $offset){
							if($key != 0){
								if($offset[0] == "{" && substr($offset, -1) == "}"){
									$trueRoute = true;
									$numberVariable++;
								}
							}
						}
					}
				}
				if($trueRoute){
					return "@!".$numberVariable.self::$routes['get'][$route];
					break(1);
				}
			}
		}
		return false;
	}


public static function checkPost ($post)
	{
		if($post == "/"){
			return  self::$routes['post'][$post];
		}
		
		$post = trim($post,"/");
		$firstOffset = explode('/', trim($post,"/"));

		if(in_array($post, self::$routes['post'])){
			return  self::$routes['post'][$post];
		}elseif(isset($firstOffset[0])){

			foreach (self::$routes['post'] as $route){
				$trueRoute = false;
				$numberVariable = 0;
				$firstOffsetRoute = explode('/', trim($route,"/"));
				if(isset($firstOffsetRoute[0][0]) && $firstOffsetRoute[0] == $firstOffset[0] && count($firstOffsetRoute) == count($firstOffset)){
					if($firstOffsetRoute[0][0] != "{" && substr($firstOffsetRoute[0], -1) != "}"){
						foreach ($firstOffsetRoute as $key => $offset){
							if($key != 0){
								if($offset[0] == "{" && substr($offset, -1) == "}"){
									$trueRoute = true;
									$numberVariable++;
								}
							}
						}
					}
				}
				if($trueRoute){
					return "@!".$numberVariable.self::$routes['post'][$route];
					break(1);
				}
			}
		}
		return false;
	}
} 