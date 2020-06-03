<?php

use App\Controllers\IndexController;
use Soen\Router\Router;
use Soen\Http\Message\Request;
use Soen\Http\Message\Response;
//Router::addRoute(['get'], '/index', [App\Controllers\IndexController::class, 'index'], function (){
//	return [
//		\App\Middlewares\TestMiddlewares::class,
//		\App\Middlewares\Test1Middlewares::class,
//	];
//});

Router::post('/index', [App\Controllers\IndexController::class, 'index'], [
	\App\Middlewares\Test2Middlewares::class,
]);

Router::group(['middle'=>[\App\Middlewares\TestMiddlewares::class]], [
	Router::get('/test', [App\Controllers\IndexController::class, 'test'], [
		\App\Middlewares\Test1Middlewares::class,
		\App\Middlewares\TestMiddlewares::class
	]),
]);