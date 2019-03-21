<?php

// Requiring bootstrap.php, which is responsible for preparing the app in the background
$query = require "bootstrap.php";

// "Business logic"
$tasks = $query->selectAll('tasks', 'Task');

// Views
require "index.view.php";