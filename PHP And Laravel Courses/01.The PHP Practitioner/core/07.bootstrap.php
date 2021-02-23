<?php 

// require 'DDfunction.php';

// $config = require 'config.php';


// $app = [];

App::bind('config' , require 'config.php'); // find config from the req and make it will key config so i can call it with APP::
// $app['config'] = require 'config.php';

// $app['database']  = new QueryBuilder(
//     Connection::make($app['config']['database'])


App::bind('database',  new QueryBuilder(
    Connection::make(App::get('config' )['database'])
));

// );




// require 'core/07.router.php';
// require 'core/07.Request.php';

// require 'core/database/connection.php';
// require 'core/database/QueryBuilder.php';

// require 'Task.php';
