<?php

$num = (int)readline("Enter the number :");
$first = 0;
$second = 1;
$fib = 0;

echo $first . "\n" . $second;
echo "\n";

while($fib < $num) {
    $fib = $first + $second;
    $first = $second;
    $second = $fib;
    
    if($fib <= $num) {
        echo $fib . "\n";
    }
}

echo "\n";

?>
