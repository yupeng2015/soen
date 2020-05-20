<?php
$webDir = dirname(__DIR__);
require_once $webDir . '/vendor/soen/http-server/src/Server.php';
require_once $webDir . '/vendor/soen/server/src/Main.php';

(new \Soen\Server\Main())->start();