<?php
namespace App\http;

use App\Api\Route;

Route::get( 'get/{folder}/{file}', 'controller@getFile');
Route::get('/', 'controller@home');

Route::post('login', 'controller@login');
Route::post('add', 'controller@add');



