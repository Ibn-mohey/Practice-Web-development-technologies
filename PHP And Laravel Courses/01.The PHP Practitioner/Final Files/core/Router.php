<?php

namespace App\Core;

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
            //dd(explode('@' , $this->routes[$requestType][$uri]));
            return $this->callAction(
                ...explode('@' , $this->routes[$requestType][$uri])
            );
            // return $this->routes[$requestType][$uri];
        }
        else {

            throw new Exception('404');
        }

    }
    protected function callAction($controller, $action)
    {

        $controller = "App\Controllers\\{$controller}";
        $controller = new $controller;
        //dd(var_dump($controller , $action));
        # code....
        if(! method_exists($controller , $action)){
            throw new Exception("{$controller} with no {$action} action.");
        }
        return $controller->$action();
    }
}
