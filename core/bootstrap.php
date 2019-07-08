<?php

use Medoo\Medoo;

require "functions.php";
require "logger.php";

$config = require "config.php";

return new Medoo([
    'database_type' => $config['database']['database_type'],
    'database_name' => $config['database']['database_name'],
    'server' => $config['database']['server'],
    'username' => $config['database']['username'],
    'password' => $config['database']['password']
]);