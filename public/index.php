<?php
$webDir = dirname(__DIR__);
require_once $webDir . '/vendor/autoload.php';
require_once $webDir . '/vendor/soen/server/src/Main.php';
require_once $webDir . '/config/routes.php';
(new \Soen\Server\Main())->run();