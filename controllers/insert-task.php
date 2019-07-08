<?php
require "logger.php";

if (!empty($_POST['description']) &&
    !empty($_POST['assignee']) &&
    isset($_POST['completed']) && $_POST['completed'] != "") {

    $data = $_POST;

    $database->insert('tasks', [
        'description' => $data["description"],
        'assignee' => $data["assignee"],
        'completed' => $data["completed"],
    ]);

    if ($database->error()[0]!=0){
        $log->error("Ooops, something went wrong :(");
    } else {
        $log->info("New task added!");
    }

    header("Location: /");
    exit();
}

header("Location: task");
exit();