<?php
require __DIR__ . '/../vendor/autoload.php';
$webDirectory = dirname(__DIR__, 1);
! defined('BASE_PATH') && define('BASE_PATH', $webDirectory);
$httpConfigDirectory = BASE_PATH . '/config/http';
$array = (new Soen\Container\Application($httpConfigDirectory))->run();
var_dump($array);

//require_once $webDir . '/vendor/soen/http-server/src/Server.php';
//require_once $webDir . '/vendor/soen/server/src/Main.php';
//
//(new \Soen\Server\Main())->start();