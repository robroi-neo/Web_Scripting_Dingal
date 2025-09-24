<?php

const BASE_PATH = __DIR__ . '/../';

require(BASE_PATH . 'core/functions.php');

spl_autoload_register(function ($class) {
    var_dump($class);
    require base_path("core/" . $class . ".php");
});
require base_path('router.php');
