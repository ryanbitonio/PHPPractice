<?php

// Compare two values alphabetically
// -1 if a < b
// 0 if a == a || b == b
// 1 if a > b

// a < b
$string1 = "a";
$string2 = "b";

// Result: -1
$result = strcmp($string1, $string2);
echo $result;

echo "\n";

// a == b
$string1 = "a";
$string2 = "a";

// Result: 0
$result = strcmp($string1, $string2);
echo $result;

echo "\n";

// a > b
$string1 = "b";
$string2 = "a";

// Result: 1
$result = strcmp($string1, $string2);
echo $result;
