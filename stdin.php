<?php

// trim() removes the trailing line feed

echo "Where do you live? ";

// Assuming that user entered "Bulacan" as address and Sleeping as his hobby.
// Result: Bulacan
$address = fgets(STDIN);
$address = trim($address);

echo "What is your hobby? ";
// Result: Sleeping
$hobby = fgets(STDIN);
$hobby = trim($hobby);