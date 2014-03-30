<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$app->match('/', function() use ($app) {
    return $app['twig']->render('index.html.twig');
})->bind('homepage');

$app->get('/hello/{name}', function($name) use($app) {
    return 'Hello '.$app->escape($name);
});
/*
// Pages
$pages = array(
    '/works' => 'works',
);

//Routes
foreach ($pages as $route => $view) {
    $app->get($route, function () use ($app, $view) {
        return $app['twig']->render($view . '.twig');
    })->bind($view);
}
*/
return $app;