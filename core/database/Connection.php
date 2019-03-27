<?php

/**
 * Class Connection
 *
 * Handles database connections
 */
class Connection
{
    /**
     * @param $config
     * @return PDO
     *
     * Makes a PDO object and returns it
     * Needs a $config array with dsn, username and password keys
     */
    public static function make($config)
    {
        try {
            return new PDO($config['dsn'], $config['username'], $config['password']);
        } catch (PDOException $e) {
            dd('Connection failed: ' . $e->getMessage());
        }
    }
}