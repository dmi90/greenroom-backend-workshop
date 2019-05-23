<?php

if (!empty($_POST["submitId"]) &&
    !empty($_POST["id"])) {
    $database->delete('tasks', [
        "id" => $_POST["id"]
    ]);

    if ($database->error()[0]!=0){
        dd("Ooops, something went wrong :(");
    }
}

header("Location: /");
exit();
