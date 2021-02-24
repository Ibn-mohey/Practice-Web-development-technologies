<?php
require 'vendor/autoload.php';

require 'DDfunction.php';
$database  = require 'core/bootstrap.php';


use App\Core\{Router , Request};

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
