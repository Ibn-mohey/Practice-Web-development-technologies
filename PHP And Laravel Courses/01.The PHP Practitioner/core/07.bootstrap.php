<?php 

require 'DDfunction.php';

// $config = require 'config.php';
$app = [];

$app['config'] = require 'config.php';
require 'core/07.router.php';
require 'core/07.Request.php';

require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';

require 'Task.php';

$app['database']  = new QueryBuilder(
    Connection::make($app['config']['database'])

);
