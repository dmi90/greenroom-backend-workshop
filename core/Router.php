<?php

class Router
{
    protected $routes;

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @return mixed
     * @throws Exception
     *
     * Returns a route based on the given uri
     * Routes are stored in the $routes param of this class, they can be defined using the define function
     */
    public function direct($uri, $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->routes[$method][$uri];
        }

        throw new Exception('No route found.');

    }

    /**
     * @param $file
     * @return Router
     *
     * Loads a routing file, returns an instance of the class
     */
    public static function load($file)
    {
        $router = new static;
        require $file;

        return $router;
    }
}