<?php

class Router
{

    protected $routes = [];

    public static function load($file)
    {
        # code...
        $router = new static;
        require $file;
        return $router;

    }


    public function define($routes)
    {
        # code...
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        # code...
        if (array_key_exists($uri , $this->routes)){
            return $this->routes[$uri];
        }
        else {

            throw new Exception('404');
        }

    }
}
