<?php

namespace App\Core;
class App
{
    protected static $registry = [];

    public static function bind($key, $value)
    {
        # code...
        static::$registry[$key] = $value;

    }
    public static function get($key)
    {
        # code...
        if (! array_key_exists($key , static::$registry)){
                throw new Exception("No {$key} is found ");
        }
        return  static::$registry[$key];
    }
}
