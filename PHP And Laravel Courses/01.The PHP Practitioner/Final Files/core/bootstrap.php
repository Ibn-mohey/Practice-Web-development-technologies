<?php 


App::bind('config' , require 'config.php'); // find config from the req and make it will key config so i can call it with APP::



App::bind('database',  new QueryBuilder(
    Connection::make(App::get('config' )['database'])
));


function view($name, $data =[ ])
{
    # code...
    extract($data);
    return require "views/{$name}.view.php";
}

function redirect($path)
{
    # code...
    header('Location: /users');
}


