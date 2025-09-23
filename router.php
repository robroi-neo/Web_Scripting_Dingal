<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$uri = strip($uri);

$routes = require 'routes.php';

function routeToController($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        return require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);
    die();
}

routeToController($uri, $routes);