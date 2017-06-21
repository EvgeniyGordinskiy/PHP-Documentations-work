<?php
namespace App\http;

use App\Api\Route;


//Дальше глохнет, не пойму, тупо 500-я и всё
Route::get( 'first', 'controller@gud');
Route::get('/', 'controller@gud');


