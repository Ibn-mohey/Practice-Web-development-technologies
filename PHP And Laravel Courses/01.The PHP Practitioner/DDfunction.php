<?php
function dd($data)
{
    echo '<pre>';

    die(var_dump($data));

    echo '</pre>';
}


// function connectToDb()
// {
//     # code...
//     try {
//         return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
//     } catch (PDOException $e) {
//         die($e->getMessage());
//     }
// }

// function FetchAllTasks($pdo)
// {
//     # code...
//     $stat = $pdo->prepare('select * from  todos');

//     // execute
//     $stat->execute();

//     return $stat->fetchAll(PDO::FETCH_CLASS, 'Task');
// }
