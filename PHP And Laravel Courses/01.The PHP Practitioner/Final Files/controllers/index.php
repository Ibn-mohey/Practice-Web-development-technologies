<?php


$tasks = App::get('database')->selectAll('todos');
$users = App::get('database')->selectAll('users');


require 'views/view.php';
