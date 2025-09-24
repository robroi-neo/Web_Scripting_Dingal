<?php

$heading = "Login";

$config = require base_path('config.php');
$db = new Database($config);

$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!Validator::string($_POST['username'], 1, 255)) {
        $error['username'] = "Username is required";
    }
    if (!Validator::string($_POST['password'], 1, 255)) {
        $error['password'] = "Password is required";
    }
}

require view('login.view.php');
