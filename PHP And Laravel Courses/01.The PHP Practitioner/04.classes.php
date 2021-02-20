<?php

require 'DDfunction.php';


class Task{

    public $description;

    public $completed = false;


    public function __construct($description)
    {
        $this->description = $description;

    }

    public function isComplete(){
        return $this->completed;
    }

    public function complete(){
        $this->completed = true;

    }
}

$task1 = new Task('this is new task ');
$task1->complete();

$taskss = [
    new Task("task1 1"),
    new Task("task 22"),
    new Task("task3")
];

$taskss[0]->complete();
//dd(($tasks));

