<?php
echo "Enter the Quantity: "; // Added missing semicolon here
$quantity = trim(fgets(STDIN));
echo "Enter the Rate per Quantity: ";
$rate = trim(fgets(STDIN));

$total = $quantity * $rate;
echo "The Total Amount is " . $total;

$discount = 0;
if ($quantity > 100) {
    $discount = 0.10 * $total;
    $total = $total - $discount; // Corrected this line to subtract discount from total
    echo "\nThe Final Amount after Discount is " . $total;
} else {
    echo "\nThe Final Amount is " . $total;
}
