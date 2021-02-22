<?php


$quey  = require '06.bootstrap.php';

$tasks = $quey->selectAll('todos' , 'Task');

// $tasks = $quey->selectAll('todos');
// dd($tasks);
// $tasks = array_map(function($task){
//     return 'foo';
// } , $tasks );
// dd($tasks);

require '07.PDO.view.php';
