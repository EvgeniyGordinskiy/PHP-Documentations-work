<?php
spl_autoload_register(function ($class) {
	$class = str_replace('\\','/',$class);
	try {
		include $class . '.php';
	}catch(\Exception $e){
		throw new \Exception();
	}
});

preg_match_all('/\/(.+)\&/U', $_SERVER['REQUEST_URI'], $matches);
$get = "";
if(count($matches[0]) > 0){
	$get .= $matches[1][0];
}else{
	$get = $_SERVER['REQUEST_URI'];
}

if($get){
	$GLOBAL['get'] = $get;
}

require ('./autoload.php');


$default = parse_ini_file(".def");
$conf =[];
foreach ($default as $key => $value) {
	$conf[$key] = $value;
	$GLOBAL[$key] = $value;
}


function __get($variable){
	return isset($conf[$variable])?$conf[$variable]: "";
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

$header = file_get_contents("Layouts/header.html");
$body = file_get_contents("Layouts/body.html");
$footer = file_get_contents("Layouts/footer.html");
echo $header.$body.$footer;
