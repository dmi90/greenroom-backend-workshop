<?php

require "functions.php";
require "Task.php";

$tasks = [
    new Task('Első feladat'),
    new Task('Második feladat'),
    new Task('Harmadik feladat')
];

$tasks[0]->complete();

require "index.view.php";