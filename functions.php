<?php

function dd($value) {
    echo'<pre>';
    var_dump($value);
    echo'</pre>';
    die();
}

function strip($uri) {
    $base = '/notes-mini-project';
    if (strpos($uri, $base) === 0) {
        $uri = substr($uri, strlen($base));
        if ($uri === '') $uri = '/';
    }
    return $uri;
}