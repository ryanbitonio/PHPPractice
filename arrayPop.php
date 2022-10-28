<?php

// Note:
// unset does not return any value
// unset shuffles the index, use array_values to reindex

// Removing the last element

$seasons = [
    'Winter',
    'Autumn',
    'Fall'
];

array_pop($seasons);

// Result: Winter, Autumn
var_dump($seasons);

// Removing the first element
array_shift($seasons);

// Result: Autumn
var_dump($seasons);

// Removing an element by its key in associative array
$universities = [
    'u1' => 'ADU',
    'u2' => 'PUP',
    'u3' => 'FEU'
];

unset($universities["u1"]);

// Result: PUP, FEU
var_dump($universities);

// Reindex the array
// $universities = array_values($universities);


unset($universities[1]);

// Reindex the keys from u2, u3 to 0, 1
// Result: PUP
var_dump($universities);