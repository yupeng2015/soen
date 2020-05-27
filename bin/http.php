<?php
require __DIR__ . '/../vendor/autoload.php';
$webDirectory = dirname(__DIR__);
$httpConfigDirectory = $webDirectory . '/config/http';
$array = (new Soen\Container\Server($httpConfigDirectory))->load();
var_dump($array);

//require_once $webDir . '/vendor/soen/http-server/src/Server.php';
//require_once $webDir . '/vendor/soen/server/src/Main.php';
//
//(new \Soen\Server\Main())->start();