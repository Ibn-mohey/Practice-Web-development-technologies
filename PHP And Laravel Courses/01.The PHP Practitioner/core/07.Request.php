<?php

class Request
{
    public function uri()
    {
        # code...
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}