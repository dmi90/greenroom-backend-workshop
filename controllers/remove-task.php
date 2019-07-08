<?php
require "logger.php";

if (!empty($_POST["submitId"]) &&
    !empty($_POST["id"])) {
    $database->delete('tasks', [
        "id" => $_POST["id"]
    ]);

    if ($database->error()[0]!=0){
        $log->error("Ooops, something went wrong :(");
    } else {
        $log->info("The task is removed!");
    }
}

header("Location: /");
exit();
