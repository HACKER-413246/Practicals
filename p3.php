<?php

$positiveCount = 0;
$negativeCount = 0;
$zeroCount = 0;

do {
    // Read a number from the user
    $number = (int)readline("Enter a number: ");

    // Check if the number is positive, negative, or zero
    if ($number > 0) {
        $positiveCount++;
    } elseif ($number < 0) {
        $negativeCount++;
    } else {
        $zeroCount++;
    }

    // Ask the user if they want to continue
    $choice = readline("Do you want to enter another number? (yes/no): ");
} while (strtolower($choice) === "yes");

// Display the results
echo "\nCount of positive numbers: $positiveCount\n";
echo "Count of negative numbers: $negativeCount\n";
echo "Count of zeros: $zeroCount\n";

?>
