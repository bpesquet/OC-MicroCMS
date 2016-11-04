<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// enable the debug mode
$app['debug'] = true;

require __DIR__.'/../app/routes.php';

$app->run();
