<?php

include __DIR__ . '/../vendor/Silex/autoload.php';

use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

// Register extenstions

//Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
    'twig.class_path' => __DIR__ . '/../vendor/Twig/lib',
));


// Pages
$pages = array(
    '/' => 'home',
    '/works' => 'works',
);

//Routes
foreach ($pages as $route => $view) {
    $app->get($route, function () use ($app, $view) {
        return $app['twig']->render($view . '.twig');
    })->bind($view);
}

// Run
$app->run();
