<?php


namespace App\Middlewares;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Soen\Http\Server\Middleware\Middleware;

class Test2Middlewares extends Middleware
{
	public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
	{
		echo '这是第二个中间件';
		return $handler->handle($request);
	}

}