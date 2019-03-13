<?php

/**
 * Dump & Die
 * @param $param
 */
function dd($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
    exit;
}

/**
 * Creates a database connection and returns a PDO object
 * @return PDO
 */
function connectToDb()
{
    try {
        return new PDO('mysql:dbname=myapp;host=127.0.0.1', 'root', '');
    } catch (PDOException $e) {
        dd('Connection failed: ' . $e->getMessage());
    }
}

/**
 * Fetches all tasks from the database, using a PDO object
 * @param $pdo
 * @return mixed
 */
function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from tasks');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}