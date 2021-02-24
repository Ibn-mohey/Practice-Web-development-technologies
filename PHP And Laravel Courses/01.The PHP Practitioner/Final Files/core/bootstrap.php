<?php 


App::bind('config' , require 'config.php'); // find config from the req and make it will key config so i can call it with APP::



App::bind('database',  new QueryBuilder(
    Connection::make(App::get('config' )['database'])
));



