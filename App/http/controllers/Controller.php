<?php
namespace App\http\controllers;

use App\Api\Auth\LoginModel;
use App\Api\BaseController;

class Controller extends BaseController
{
	public function home()
	{
		$GLOBALS['bodyHtml'] = file_get_contents('Layouts/home.html');
	}
	
	public function getFile ($folder, $file){
		die($folder);
	}

	public function login()
	{
		$args['email'] = $GLOBALS['default']['args.auth.email'];
		$args['pass'] = $GLOBALS['default']['args.auth.pass'];
		var_dump(new LoginModel());
		$check = filter_input_array(INPUT_POST, $args);
		if(isset($check['email']) && isset($check['pass'])){
			foreach ($check as &$value){
				
				$value = strtolower($value);
			}
			
			
			var_dump($check);

		}
		dd('login in controller');
	}

	public function add(){
		ddd();
	}
}