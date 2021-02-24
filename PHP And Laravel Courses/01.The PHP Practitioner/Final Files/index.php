<?php
require 'vendor/autoload.php';

require 'DDfunction.php';
$database  = require 'core/bootstrap.php';


Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
