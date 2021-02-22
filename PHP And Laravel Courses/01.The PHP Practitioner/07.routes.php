<?php




$router->define([

'' => 'controllers/07.index.php',
'about' => 'controllers/07.about.php',
'about/culture' => 'controllers/07.about-culture.php',
'contact' => 'controllers/07.contact.php'
]);

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