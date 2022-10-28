<?php

$integerCasting = "25";
// Result: string(2) "25"
var_dump($integerCasting);

// Converting it to integer using casting
$casted = (int)$integerCasting;
// Result: int(25);
var_dump($casted);

// Adding it to other integer
$total = $integerCasting + 5;

// Result: integer(30)
var_dump($total);