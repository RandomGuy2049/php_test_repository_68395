<?php

// Conditional statements in PHP
// If, else if, else
$stock = 20;

if ($stock >= 10) {
    echo "In stock";
} else if ($stock <= 10 and $stock >= 5) {
    echo "Low stock";
} else {
    echo "Out of stock";
}

// Switch statement in PHP

$voucher = "HAPPYNEWYEAR2024";
switch ($voucher) {
    case "HAPPYNEWYEAR2024":
        echo "Voucher applied: 20% off";
        break;
    case "SUMMERSALE2024":
        echo "Voucher applied: 15% off";
        break;
    default:
        echo "Invalid voucher code";
}

// Ternary operator in PHP
echo $stock >= 10 ? "In stock" : "Out of stock";
echo ($stock >= 10) ? "In stock" : ($stock < 10 && $stock >= 5 ? "Low stock" : "Out of stock");

// Looping statements in PHP
// For loop

for ($i = 0; $i < 10; $i++) {
    echo "Product {$i}<br>";
}

// While loop
$i = 0;

while ($i < 10) {
    echo "Product {$i}<br>";
    $i++;
}

// Do-while loop
$i = 0;

do {
    echo "Product {$i}<br>";
    $i++;
} while ($i < 10);
?>