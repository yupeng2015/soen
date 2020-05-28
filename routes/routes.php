<?php

use Soen\Router\Router;
use Soen\Http\Message\Request;
use Soen\Http\Message\Response;
echo 1111;
Router::addRoute(['get'], '/index', [\App\Controllers\IndexController::class, 'index'], function (){
	return [
		\App\Middlewares\TestMiddlewares::class,
		\App\Middlewares\Test1Middlewares::class,
	];
});