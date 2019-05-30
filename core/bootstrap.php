<?php

use Medoo\Medoo;

require "functions.php";

$dotenv = Dotenv\Dotenv::create('.');
$dotenv->load();

//$config = require "config.php";

return new Medoo([
    'database_type' => $_ENV['DB_TYPE'],
    'database_name' => $_ENV['DB_NAME'],
    'server' => $_ENV['DB_SERVER'],
    'username' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS']
]);