<?php

/**
 * Class Request
 *
 * Common class for handling requests
 */
class Request
{
    /**
     * @return string
     *
     * Returns the current uri
     */
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}