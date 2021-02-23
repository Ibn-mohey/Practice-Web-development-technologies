<?php
require 'vendor/autoload.php';

$database  = require 'core/07.bootstrap.php';

// $router = new Router;



// this takes the uri and goes to controller >> controller req the data and load the view >> view will be on the screen 
//require  $router->direct('about');

// $uri = trim($_SERVER['REQUEST_URI'], '/');

//require '07.routes.php';
// require  $router->direct(trim($_SERVER['REQUEST_URI'] , '/'));


require Router::load('07.routes.php')
    ->direct(Request::uri(), Request::method());

// $router = Router::load('07.routes.php');

// require $router->direct($uri);