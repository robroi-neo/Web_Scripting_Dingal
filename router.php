<?php


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home.php',
    '/register' => 'controllers/register.php',
    '/login' => 'controllers/login.php',
    '/notes' => 'controllers/notes.php'
];


function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        return require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);
