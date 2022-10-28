<?php

// Note: 

// Array item = element
// Keys can only be integer or string
// Elements can be of any type (string, int, float, bool, variables)

// Syntax:

// array("element1", "element2", "element3");

// Shorthand using []
// array = [];

$colors = ["red", "green", true];
var_dump($colors);

// Or when integer keys are specified
$brands = array(2 => "Samsung", 4 => "Apple", 5 => "Toyota");
var_dump($brands);