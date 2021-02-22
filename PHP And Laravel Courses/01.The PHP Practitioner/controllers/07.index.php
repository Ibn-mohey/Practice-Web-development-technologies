<?php


$tasks = $app['database']->selectAll('todos');


require 'views/07.view.php';
