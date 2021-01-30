<?php

$router = new \Phalcon\Mvc\Router(false); // Here tell the router to not using default routes
$router->setDI($di);
$router->setUriSource(Phalcon\Mvc\Router::URI_SOURCE_SERVER_REQUEST_URI);

foreach (conf()->routes as $controller => $route) {
    $router
        ->add(
            $route->pattern,
            $controller,
            explode(',', $route->get('methods', 'GET')),
            $route->get('position', Phalcon\Mvc\Router::POSITION_FIRST) )
        ->setName($controller);
}

$router->notFound([ 'namespace' => 'Core', 'controller' => 'Error', 'action' => 'http404' ]);

return $router;
