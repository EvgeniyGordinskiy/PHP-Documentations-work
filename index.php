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
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
   echo '</script>';
}

$page = $_GET;
if($page){
	//	die(\App\Api\Route::checkGet('first'));
		      /* $file  = substr($method, 0,strpos($match,'@'));
        require '../http/controllers/'.$file."php";
        $function = substr($method,strpos($method,'@')+1, strlen($method));*/
}
$postRequest = $_POST;
if($postRequest){
	if(isset($postRequest['url'])){
		$GLOBALS['post']['url'] = $postRequest['url'];
		unset($postRequest['url']); 
	}

	foreach ($postRequest as $name => $value) {
		$GLOBALS['post']['variables'][$name] = $value;
	}
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
