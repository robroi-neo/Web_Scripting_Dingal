<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

dd($uri);

$routes = require 'routes.php';

function routeToController($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        return require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);