<?php

$num1 = (int)readline("Enter 1st number : ");
$num2 = (int)readline("Enter 2nd number : ");
$num3 = (int)readline("Enter 3rd number : ");

$largest = ($num1 > $num2) ? ($num1 > $num3 ? $num1 : $num3) : ($num2 > $num3 ? $num2 : $num3);

echo "\n Largest number is : ".$largest."\n";

?>
