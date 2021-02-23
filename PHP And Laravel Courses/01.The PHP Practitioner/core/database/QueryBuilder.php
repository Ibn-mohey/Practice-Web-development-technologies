<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoclass = null)
    {
        # code...
        # code...
        $stat = $this->pdo->prepare("select * from  {$table}");

        // execute
        $stat->execute();

        // return $stat->fetchAll(PDO::FETCH_CLASS, 'Task');
        // make the function accept null calls if there was no class
        if (isset($intoclass)) {
            return $stat->fetchAll(PDO::FETCH_CLASS, $intoclass);
        } else {
            return $stat->fetchAll(PDO::FETCH_CLASS);
        }
    }

    public function insert($table, $parameters)
    {
        # code...
        // insert into $tablename $columnsnames value $data

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))

        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die('not good ' . $e );
        }
    }
}
