<?php


$tasks = $app['database']->selectAll('todos');
$users = $app['database']->selectAll('users');


require 'views/07.view.php';
