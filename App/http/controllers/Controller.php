<?php
namespace App\http\controllers;

use App\Api\BaseController;

class Controller extends BaseController
{
	public function home()
	{
		dd('home');
	}
	
	public function getFile ($folder, $file){
		dd('folder = '.$folder);
		dd('file = '.$file);
	}
}