<?php

// Array in PHP
// Numeric Array
$products = array("Product 1", "Product 2", "Product 3", "Product 4", "Product 5");
foreach ($products as $product) {
    echo "Product: $product <br>";
}

// Associative Array
$productDetails = array(
    "Product A" => array("price" => 20, "stock" => 50),
    "Product B" => array("price" => 25, "stock" => 30),
    "Product C" => array("price" => 30, "stock" => 20)
);

foreach ($productDetails as $product => $details) {
    echo "Product: $product <br>";
    echo "Price: $" . $details["price"] . "<br>";
    echo "Stock: " . $details["stock"] . "<br><br>";
}

// Multidimensional Array
$storeInventory = array(
    "Electronics" => array(
        "TV" => array("price" => 500, "stock" => 10),
        "Laptop" => array("price" => 1000, "stock" => 5)
    ),
    "Clothing" => array(
        "Shirt" => array("price" => 20, "stock" => 50),
        "Jeans" => array("price" => 40, "stock" => 30)
    )
);

foreach ($storeInventory as $sectionName => $products ) {
    echo "<strong>$sectionName</strong><br>";
    foreach ($products as $productName => $details ) {
        echo "Product: $productName, Price: {$details['price']}, Stock: {$details['stock']}<br>";
    }
    echo "<br>";
}
?>