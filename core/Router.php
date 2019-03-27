<?php

class Router
{
    protected $routes;

    /**
     * @param $routes
     *
     * Setter function of the $routes parameter
     */
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * @param $uri
     * @return mixed
     * @throws Exception
     *
     * Returns a route based on the given uri
     * Routes are stored in the $routes param of this class, they can be defined using the define function
     */
    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
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