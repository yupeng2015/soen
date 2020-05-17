<?php

use Soen\Router\Router;

Router::addRoute(['get'], '/', [\App\Controllers\IndexController::class, 'index'], function (){
	return [
		function(){
			echo 555;
		},
		\app\Middlewares\TestMiddlewares::class
	];
});