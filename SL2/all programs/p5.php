<?php

// Function to swap values (Call by Value)
function SwapValue($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "Inside SwapValue Function (Call By Value): a = $a, b = $b\n";
}

// Function to swap references (Call by Reference)
function SwapReference(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "Inside SwapReference Function (Call By Reference): a = $a, b = $b\n";
}

$str1 = (string)readline("Enter the First word: ");
$str2 = (string)readline("Enter the Second word: ");

echo "Before Swapping by Call By Value: a = $str1, b = $str2\n";
SwapValue($str1, $str2);
echo "After Swapping By Value: a = $str1, b = $str2\n\n";

echo "Before Swapping by Call By Reference: a = $str1, b = $str2\n";
SwapReference($str1, $str2);
echo "After Swapping By Reference: a = $str1, b = $str2\n";
?>
