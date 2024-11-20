<?php
function transformArray($inputArray)
{
    $outputArray = [];
    foreach ($inputArray as $number) {
        if ($number % 2 == 0) {
            // Even number: divide by 2
            $outputArray[] = $number / 2;
        } else {
            // Odd number: multiply by 3
            $outputArray[] = $number * 3;
        }
    }
    return $outputArray;
}

$inputArray = [4, 2, 3, 4, 5, 6];
$outputArray = transformArray($inputArray);

echo "Input Array: ";
print_r($inputArray);

echo "Output Array: ";
print_r($outputArray);
?>
