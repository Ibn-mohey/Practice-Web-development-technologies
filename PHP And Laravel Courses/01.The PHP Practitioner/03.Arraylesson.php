
<?php
$names = ['nameone', 'name2', 'namethree'];

// foreach ($names as $i){
// echo $i . ', ';
// }

$self = [
    'age' => 24,
    'hair' => "black",
    'career' => 'DS'

];

unset($self['age']);

$self['name'] = 'Mohey';


var_dump($self);

echo '<pre>';
var_dump($self);
echo '</pre>';

$task = [
    "title" => "ass",
    'due' => 'today',
    'ass to' => 'me',
    'completed' => false
];




?>