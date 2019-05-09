<?php

// "Business logic"
$tasks = $database->select('tasks', '*');

// Views
require "views/index.view.php";