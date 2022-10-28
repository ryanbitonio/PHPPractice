<?php

// Pushing an element at the end of the array

// using shorthand, square bracket notation
$color = [];
$color[] = "Red";

// Result: ["Red"]
var_dump($color);

// Using the recommended way
array_push($color, "Blue");

// Result: ["Red", "Blue"]
var_dump($color);


// Pushing an element at the beginning of the array
array_unshift($color, "White");
var_dump($color);

// Adding key and value to an associative array
$animals = [
    'a1' => 'dog',
    'a2' => 'cat',
    'a3' => 'bird'
];

$animals['a4'] = 'fish';
var_dump($animals);