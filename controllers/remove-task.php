<?php

if (isset($_GET["id"])){
    $database->delete('tasks', [
        "id" => $_GET["id"]
    ]);

    if ($database->error()[0]!=0){
        dd("Ooops, something went wrong :(");
    }

    header("Location: /");
    exit();
}
