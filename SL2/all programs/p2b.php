<?php

$number = (int)readline("Enter a number : ");
$digit = 0;
$addition = 0;

while($number > 0){
    $digit = $number % 10;
    $number = intdiv($number, 10);  // Use integer division
    $addition = $addition + $digit;
}

echo "Total is : ".$addition."\n";

?>
