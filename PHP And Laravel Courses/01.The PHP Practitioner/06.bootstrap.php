<?php 

require 'DDfunction.php';

$config = require 'config.php';

require 'database/connection.php';
require 'database/QueryBuilder.php';

require 'Task.php';

return  new QueryBuilder(
    Connection::make($config['database'])

);
