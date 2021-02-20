<?php

//require 'DDfunction.php';

require 'Task.php';
require 'DDfunction.php';

require 'database/connection.php';
require 'database/QueryBuilder.php';

// connect


// try {
// $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','');
// } catch (PDOException $e){
//     die($e->getMessage());

// }



// prepare

// $stat = $pdo->prepare('select * from  todos');

// // execute
// $stat ->execute();

// do what ever want like fetch data 

// echo '<pre>';
// //var_dump($stat->fetchAll());

// echo '</pre>';

// echo '<pre>';
// //var_dump($stat->fetchAll(PDO::FETCH_OBJ));
// echo '</pre>';
// $results = $stat->fetchAll(PDO::FETCH_OBJ);

// echo '<pre>';
// //var_dump($results);
// echo '</pre>';

// var_dump($results[0]->description);

//$tasks = $stat->fetchAll(PDO::FETCH_OBJ);

// use task class 

// final 2 lines of code


// $pdo = connectToDb();

$pdo = Connection::make();

$quey =  new QueryBuilder($pdo);

//$tasks = FetchAllTasks($pdo);

$tasks = $quey->selectAll('todos' , 'Task');
// dd($tasks);



require '05.PDO.view.php';
