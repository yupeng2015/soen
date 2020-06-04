<?php


namespace App\Controllers;


use Psr\Http\Message\RequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Soen\Http\Message\Request;
use Soen\Http\Message\ServerRequest;

class IndexController
{
	function index()
	{
        return '这是中文的';
	}
	function test(Request $request)
	{
//	    var_dump($arr);
		return '这是test';
	}
}