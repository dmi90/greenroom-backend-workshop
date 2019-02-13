<?php

require "functions.php";

class Task
{
    protected $id;
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$tasks = [
    new Task('Első feladat'),
    new Task('Második feladat'),
    new Task('Harmadik feladat')
];

$tasks[0]->complete();

require "index.view.php";