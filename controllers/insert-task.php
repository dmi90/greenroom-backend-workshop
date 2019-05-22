<?php

if (isset($_POST['description']) && $_POST['description'] != "" &&
    isset($_POST['assignee']) && $_POST['assignee'] != "" &&
    isset($_POST['completed']) && $_POST['completed'] != "") {

    $data = $_POST;

    $database->insert('tasks', [
        'description' => $data["description"],
        'assignee' => $data["assignee"],
        'completed' => $data["completed"],
    ]);

    if ($database->error()[0]!=0){
        dd("Ooops, something went wrong :(");
    }

    header("Location: /");
} else {
    header("Location: task");
}

exit();
