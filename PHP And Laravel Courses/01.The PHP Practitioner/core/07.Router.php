<?php

class Router
{

    public $routes = [
        'GET' => [] ,
        'POST'=> []
    ];

    public static function load($file)
    {
        # code...
        $router = new static;
        require $file;
        return $router;

    }


    // public function define($routes)
    // {
    //     # code...
    //     $this->routes = $routes;
    // }

    public function get($uri , $controller)
    {
        # code...
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri , $controller)
    {
        # code...
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri , $requestType)
    {
        # code...

        if (array_key_exists($uri , $this->routes[$requestType])){

            return $this->routes[$requestType][$uri];
        }
        else {

            throw new Exception('404');
        }

    }
}
