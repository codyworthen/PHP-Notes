<?php

require 'functions.php';

$header = "Arrays & Associate Arrays";

// normal array
$names = [
	'Bella',
	'Chloe',
	'Tank',
];

$names[] = 'Buttercup'; // adds an item to the array

// Associative array
$person = [
	'alive' => true,
	'age' => 23,
	'hair' => 'brown',
	'position' => 'Master of Coin'
];

$person['name'] = 'Cody'; // adds a new key-value pair to the array

unset($person['hair']); // destroys the key-value pair 'hair':23

$task = [
	'name' => 'Learn PHP',
	'due' => new DateTime("07-01-2022"),
	'assignedTo' => 'Cody Worthen',
	'completed' => true,
	'impossible' => false
];

require 'index.view.php'; // pulls in everything from this path

dd($person);