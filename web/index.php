<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;
// Configuration
//require __DIR__.'/../config/prod.php';
// Registers Providers
//require __DIR__.'/../src/app.app';
// Controllers -- get, post, match
require __DIR__.'/../src/controllers.php';
// @todo Cache
$app->get('/hello/{name}', function($name) use($app) {
 
return 'Hello '.$app->escape($name);
 
});

$app->run();