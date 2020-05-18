<?php

use Soen\Router\Router;
use Soen\Http\Message\Request;
use Soen\Http\Message\Response;

Router::addRoute(['get'], '/index', [\App\Controllers\IndexController::class, 'index'], function (){
	return [
		function(Request $request, Response $response){
			echo 555;
		},
		\app\Middlewares\TestMiddlewares::class
	];
});