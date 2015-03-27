<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;
// Configuration
//require __DIR__.'/../resources/config/prod.php';
// Registers Providers
require __DIR__.'/../src/app.php';
// Controllers -- get, post, match
require __DIR__.'/../src/controllers.php';

$app->run();

