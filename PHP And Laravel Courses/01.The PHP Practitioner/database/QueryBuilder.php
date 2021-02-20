<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table , $intoclass)
    {
        # code...
            # code...
            $stat = $this->pdo->prepare("select * from  {$table}");
    
            // execute
            $stat->execute();
        
            // return $stat->fetchAll(PDO::FETCH_CLASS, 'Task');
            return $stat->fetchAll(PDO::FETCH_CLASS, $intoclass);
    }
}
