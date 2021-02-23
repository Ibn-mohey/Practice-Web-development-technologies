<?php

class Request
{
    public function uri()
    {
        # code...
        //dd(trim(parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH) , '/'));
        return trim(parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH) , '/');
        
        //return trim($_SERVER['REQUEST_URI'], '/');
    }
    public static function method()
    {
        # code...
        return $_SERVER['REQUEST_METHOD'];
    }
}