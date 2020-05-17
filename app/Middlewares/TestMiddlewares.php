<?php


namespace app\Middlewares;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Soen\Http\Server\Middleware\MiddlewareInterface;

class TestMiddlewares implements MiddlewareInterface
{
	public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
	{
		echo 55555;
		return $handler->handle($request);
	}

}