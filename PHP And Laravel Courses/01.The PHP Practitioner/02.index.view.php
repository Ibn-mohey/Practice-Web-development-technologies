<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>title this </title>
</head>

</html>

<body>
    <h1>Hello world</h1>

    <!-- <h1>
        <?php

        $greet  = 'hello worlds';
        echo $greet;

        $name = "Mohey";
        echo "\nhello, {$name}";

        $greet2  = 'hello';
        $name2 = "Abdo";
        echo "\n" . $greet2 . ', ' . $name2;


        ?>
    </h1> -->

    <!-- <h1>
        <?php
        // $newname = $_GET['name2'];

        // echo $newname;
        ?>
        <?= "Test" ?>
    </h1> -->

    <h1>
        <?php $greeting = "Test Three"; ?>
        <?= $greeting; ?>
    </h1>
    <ul>
        <?php
        foreach ($names as $i) {
            echo "<li>$i</li>";
        }
        ?>

    </ul>

    <ul>
        <?php foreach ($self as $k => $ii) : ?>

            <li> <strong> <?= $k . ': '?>  </strong> <?= $ii; ?> </li>

        <?php endforeach; ?>
    </ul>


    <h1> tasks for the day </h1>

    <ul>
    <?php foreach($task as $k => $i): ?>
        <li>
            <strong> <?= ucwords($k); ?> </strong>
            <?=$i;?>
        </li>
        <?php endforeach; ?>
    </ul>

    <h2>Another way</h2>

    <ul>
        <li><strong> title:     </strong>  <?= $task['title']  ;?>      </li>
        <li><strong> Due:       </strong>  <?= $task['due']  ;?>        </li>
        <li><strong> Ass to:    </strong>  <?= $task['ass to']  ;?>     </li>
        <li><strong> status:    </strong>  <?= $task['completed'] ? 'Complete' : 'Incomplete' ;?>  </li>
        <li><strong> status:    </strong>  <?php if($task['completed']){echo '&#9989';} else{ echo '&#10060';} ?>  </li>

    </ul>
</body>