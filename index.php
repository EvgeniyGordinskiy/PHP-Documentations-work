<?php
spl_autoload_register(function ($class) {
	$class = str_replace('\\','/',$class);
	try {
		include $class . '.php';
	}catch(\Exception $e){
		throw new \Exception();
	}
});





$default = parse_ini_file(".env");

function __get($variable){
	return isset($GLOBALS[$variable])?$GLOBALS[$variable]: "";
}

function env($param =0){
	if($param){
		return isset($GLOBALS['default'][$param])?$GLOBALS['default'][$param]:false;
	}
}

function dd( $data ){
	foreach ($data as $key => $p){
		echo $key;
		var_dump($p);
	}
}
function ddd( $data = 0 ){
	foreach ($data as $key => $p){
		echo $key;
		var_dump($p);
	}
	die();
}

$page = $_GET;
if($page){
	//	die(\App\Api\Route::checkGet('first'));
		      /* $file  = substr($method, 0,strpos($match,'@'));
        require '../http/controllers/'.$file."php";
        $function = substr($method,strpos($method,'@')+1, strlen($method));*/
}


preg_match_all('/\/(.+)\&/U', $_SERVER['REQUEST_URI'], $matches);
$get = "";
if(count($matches[0]) > 0){
	$get .= $matches[1][0];
}else{
	$get = $_SERVER['REQUEST_URI'];
}

if($get){
	$GLOBALS['get'] = $get;
}


require ('./autoload.php');

$header = file_get_contents("Layouts/header.php");
$body = file_get_contents("Layouts/body.html");
if(isset($GLOBALS['bodyHtml'])){
	$body.= $GLOBALS['bodyHtml'];
}
$footer = file_get_contents("Layouts/footer.html");

echo $header.$body.$footer;
