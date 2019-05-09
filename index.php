<?php

require "vendor/autoload.php";

// Requiring bootstrap.php, which is responsible for preparing the app in the background
$database = require "core/bootstrap.php";

// Getting the current uri
$uri = Request::uri();

// Loading the controller determined by our router
//
// The load function sets the routes on the router itself
// The direct function returns the controller path determined based on the given uri
require Router::load("routes.php")->direct($uri, Request::method());