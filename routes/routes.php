<?php

use Soen\Router\Router;
use Soen\Http\Message\Request;
use Soen\Http\Message\Response;
//Router::add(['get'], '/index', [App\Controllers\IndexController::class, 'index'], [
//		\App\Middlewares\TestMiddlewares::class,
//		\App\Middlewares\Test1Middlewares::class,
//	]);
Router::group(['middle' => [\App\Middlewares\TestMiddlewares::class,\App\Middlewares\Test1Middlewares::class]], [
        Router::get('/test', [App\Controllers\IndexController::class, 'test'], [\App\Middlewares\TestMiddlewares::class]),
        Router::get('/index', [App\Controllers\IndexController::class, 'index'], [\App\Middlewares\Test1Middlewares::class]),
    ]
);