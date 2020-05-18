<?php


namespace App\Middlewares;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Soen\Http\Server\Middleware\Middleware;

class Test1Middlewares extends Middleware
{
	public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
	{
		echo 666;
		return $handler->handle($request);
	}

}