<?php

$app = new \Slim\App;

$container = $app->getContainer();
$container['db']=function(){
    return new PDO('mysql:host=localhost;dbname=studentdetails','root','');

};

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__ .'/../resources/views', [
        'cache' => false
    ]);

    // Instantiate and add Slim specific extension
    $router = $container->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
};


require __DIR__ . '/../routes/web.php';