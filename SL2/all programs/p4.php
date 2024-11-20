<?php
$choice;
$continue = 'y';

while ($continue == 'y') {
    echo "----- MENU -----\n";
    echo "1. ADDITION\n";
    echo "2. SUBTRACT\n";
    echo "3. MULTIPLY\n";
    echo "4. DIVISION\n";

    $choice = (int)readline("Enter your choice: ");

    switch ($choice) {
        case 1:
            $num1 = (int)readline("Enter the first number: ");
            $num2 = (int)readline("Enter the second number: ");
            echo "\nThe Addition is: " . ($num1 + $num2) . "\n\n";
            break;

        case 2:
            $num1 = (int)readline("Enter the first number: ");
            $num2 = (int)readline("Enter the second number: ");
            echo "\nThe Subtraction is: " . ($num1 - $num2) . "\n\n";
            break;

        case 3:
            $num1 = (int)readline("Enter the first number: ");
            $num2 = (int)readline("Enter the second number: ");
            echo "\nThe Multiplication is: " . ($num1 * $num2) . "\n\n";
            break;

        case 4:
            $num1 = (int)readline("Enter the first number: ");
            $num2 = (int)readline("Enter the second number: ");
            if ($num2 == 0) {
                echo "\nDivision Error !!!\n\n";
            } else {
                echo "\nThe Division is: " . ($num1 / $num2) . "\n\n";
            }
            break;

        default:
            echo "\nInvalid choice! Please try again.\n\n";
    }

    $continue = (string)readline("Do you want to continue? (y/n): ");
    echo "\n";
}
