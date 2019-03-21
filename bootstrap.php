<?php

require "functions.php";
require "database/Connection.php";
require "database/QueryBuilder.php";
require "Task.php";

$config = require "config.php";

return new QueryBuilder(
    Connection::make($config['database'])
);