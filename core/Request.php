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

        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
            '/'
        );
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}