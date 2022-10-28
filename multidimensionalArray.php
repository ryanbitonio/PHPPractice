<?php

// Note:
// Keys that are redeclared in the same array declaration will use the last one declared.

$data = [
    'name'=> [
        'person1' => 'Ryan',
        'person2' => 'Kevin',
        'person3' => 'Nicole'
    ],
    'age' => [
        'age1' => 24,
        'age2' => 26,
        'age3' => 27
    ],
    'gender' => [
        'M',
        'M',
        'F'
    ]
];

// Result: Ryan 
// M
echo $data["name"]["person1"];
echo "\n";
echo $data ["gender"][0];
                  

    


