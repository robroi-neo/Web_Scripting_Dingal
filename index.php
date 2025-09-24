<?php

require('functions.php');
require('router.php');


$config = require 'config.php';

$db = new Database($config);
$db->query('SELECT * from users');

dd($db->query('SELECT * from hobbies')->fetch(PDO::FETCH_ASSOC));
