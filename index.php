<?php

$greeting = "Hello World";

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
    'position' => 'freelance hamster trainer'
];

$person['name'] = 'Cody'; // adds a new key-value pair to the array

unset($person['hair']); // destroys the key-value pair 'hair':23

require 'index.view.php'; // pulls in everything from this path

echo '<pre>'; // preserves the formatting of php
    var_dump($person); // dumps values for everything (echo only works for strings)
echo '</pre>';

die('php has died'); // prints a msg and exits the current script

