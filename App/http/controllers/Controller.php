<?php
namespace App\http\controllers;

use App\Api\BaseController;

class Controller extends BaseController
{
	public function home()
	{
		$test = 'vxcv';
		$GLOBALS['bodyHtml'] = file_get_contents('Layouts/home.html');
	}
	
	public function getFile ($folder, $file){
		dd('folder = '.$folder);
		dd('file = '.$file);
	}

	public function login()
	{
		var_dump($GLOBALS['post']['variables']);
		if(isset($GLOBALS['post']['variables']['email']) && isset($GLOBALS['post']['variables']['password'])){
			$email = $GLOBALS['post']['variables']['email'];
			$pass = $GLOBALS['post']['variables']['password'];
			dd(FILTER_VALIDATE_EMAIL($email));
		}
		dd('login in controller');
	}
}