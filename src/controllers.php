<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// Routing array.
$pages = array(
    '/' => 'homepage',
    '/works' => 'works',
    '/contact' => 'contact',
);

// Routes.
foreach ($pages as $route => $view) {
    $app->get($route, function () use ($app, $view) {
        return $app['twig']->render($view . '.html.twig');
    })->bind($view);
}

// Basic variable, no template.
$app->get('/hello/{name}', function($name) use($app) {
    return 'Hello '.$app->escape($name);
});

return $app;