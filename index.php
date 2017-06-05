<?php

$default = parse_ini_file(".def");
$conf =[];
foreach ($default as $key => $value) {
	$conf[$key] = $value;
	$GLOOBAL[$key] = $value;
}


function __get($variable){
	return isset($conf[$variable]);
}
function dd( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
   echo '</script>';
}

$page = $_GET;

if($page){
	dd($page);
}

$header = file_get_contents("Layouts/header.html");
$body = file_get_contents("Layouts/body.html");
$footer = file_get_contents("Layouts/footer.html");
echo $header.$body.$footer;

preg_match_all('/\/(.+)\&/U', $_SERVER['REQUEST_URI'], $matches);

$get = "";
if(count($matches[0]) > 0){
	$get .= $matches[1][0];
}else{
	$get = $_SERVER['REQUEST_URI'];
}
dd($get);
