<?php
$webDir = dirname(__DIR__);
require_once $webDir . '/vendor/autoload.php';
//require_once $webDir . '/vendor/soen/server/src/Main.php';
//require_once $webDir . '/config/routes.php';
//(new \Soen\Server\Main())->run();
use Soen\Filesystem\File;
$files = new File('./test');
$config = $files->readArrayFilesDeep($files);
print_r($config);