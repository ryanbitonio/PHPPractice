<?php

$num = readline("Enter your grade: ");

$passed = $num >= 75;
$failed = $num <= 74;

$grades = [
    "passed" => $passed,
    "failed" => $failed
];

// Result: false, true

var_dump($grades);