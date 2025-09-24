<?php

$heading = "Register";

$config = require 'config.php';
$db = new Database($config);

$allowedGenders = ['male', 'female', 'other'];
$allowedHobbies = ['reading', 'sports', 'music', 'travel'];
$allowedCountries = ['ph', 'us', 'uk', 'ca'];

$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!Validator::string($_POST['full_name'], 1, 255)) {
        $error['full_name'] = "Full Name is required";
    }
    if (!Validator::string($_POST['email'], 1, 255)) {
        $error['email'] = "Email is required";
    }
    if (!Validator::string($_POST['username'], 1, 255)) {
        $error['username'] = "Username is required";
    }
    if (!Validator::string($_POST['password'], 1, 255)) {
        $error['password'] = "Password is required";
    }
    if (!Validator::string($_POST['confirm_password'], 1, 255)) {
        $error['confirm_password'] = "Password is required";
    }

    if (!Validator::compareStrings($_POST['password'], $_POST['confirm_password'])) {
        $error['confirm_password'] = "Passwords do not match";
    }

    if (!Validator::inArray($_POST['gender'] ?? null, $allowedGenders)) {
        $error['gender'] = "Required field";
    }

    if (!Validator::arrayInArray($_POST['hobbies'] ?? null, $allowedHobbies)) {
        $error['hobbies'] = "Please select at least one hobby.";
    }

    if (!Validator::select($_POST['country'] ?? null, $allowedCountries)) {
        $error['country'] = "Please select a valid country.";
    }

    if (!empty($error)) {
        $_POST = [];
    }

    


}


require('views/register.view.php');
