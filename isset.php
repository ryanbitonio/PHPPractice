<?php

// isset returns false if the key is not present
// isset returns false if the key is present but the value is null

$animals = [
    'Dog',
    'Cat',
    'Elephant'
];

// By default, an array without keys declared has an index of 0, 1, 2, .....
$checker = isset($animals[4]);

// Result: false
var_dump($checker);