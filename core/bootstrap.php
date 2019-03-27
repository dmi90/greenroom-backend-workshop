<?php

require "functions.php";
require "Router.php";
require "Request.php";
require "database/Connection.php";
require "database/QueryBuilder.php";
require "Task.php";

$config = require "config.php";

return new QueryBuilder(
    Connection::make($config['database'])
);