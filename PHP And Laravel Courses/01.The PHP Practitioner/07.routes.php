<?php




// $router->define([

// '' => 'controllers/07.index.php',
// 'about' => 'controllers/07.about.php',
// 'about/culture' => 'controllers/07.about-culture.php',
// 'contact' => 'controllers/07.contact.php',
// 'names' => 'controllers/07.add-name.php'
// ]);



$router->get('', 'controllers/07.index.php');
$router->get('about', 'controllers/07.about.php');
$router->get('about/culture', 'controllers/07.about-culture.php');
$router->get('contact', 'controllers/07.contact.php');

$router->post('names' , 'controllers/07.add-name.php');




// some framworks
/*
$router->define('', 'controllers/07.index.php');
$router->define('about', 'controllers/07.about.php');
$router->define('about/culture', 'controllers/07.about-culture.php');
$router->define('contact', 'controllers/07.contact.php');
*/

// laravle
/*
Route::get('about', 'controllers/07.about.php');
*/