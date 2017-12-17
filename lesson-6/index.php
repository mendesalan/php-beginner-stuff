<?php


$person = [
	'age' => 31,
	'name' => 'Roso',
	'career' => 'web developer'
];

$person['last_name'] = 'Magal';
unset($person['age']);



// die(var_dump($person)); // die stops the process like dd() laravel.

require 'index.view.php'; // require a file in the given path ../../../ etc..

// echo '<pre>'; open format the vardump
// var_dump($person); var dumo the var 
// echo '</pre>';

