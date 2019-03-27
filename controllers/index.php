<?php

// "Business logic"
$tasks = $query->selectAll('tasks', 'Task');

// Views
require "views/index.view.php";