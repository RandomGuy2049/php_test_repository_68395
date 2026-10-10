<?php
    // Addition
    $price = 2000;
    $fee = 500;
    $discount = 1000;

    $total = $price + $fee - $discount;
    echo"Total: $total";

    // Reduction
    $total2 = $price - $discount;
    echo"Total2: $total2";

    // Multiplication
    $total3 = $price * 2;
    echo"Total3: $total3";

    // Division
    $total4 = (($price * 5) + $fee) - $discount;
    $splitBill = $total4 / 2;
    echo"Split Bill: $splitBill";
    
    // Operator Comparison
    $stock = 1;
    $isStockAvailable = $stock > 1; //false
    $isStockAvailable2 = $stock > 1; // true

    var_dump($isStockAvailable); //bool false
    var_dump($isStockAvailable2); //bool true

    $total5 = 2000;
    $discount2 = 2000;

    $isCanGetDiscount = $discount2 < $total5; // false
    $isCanGetDiscount2 = $discount2 <= $total5; // true

    var_dump($isCanGetDiscount); //bool false
    var_dump($isCanGetDiscount2); //bool true

    // Logical Operators: AND
    $total6 = 5000;
    $discount3 = 2000;
    $stock2 = 1;

    $getDiscount = $stock >= 1 && $total6 > $discount3;
    var_dump($getDiscount);

    // Logical Operators: OR
    $stock3 = 0;

    $getDiscount2 = $stock2 >= 1 || $total6 > $discount3;
    var_dump($getDiscount2);
    
    // Logical Operators: NOT
    $isStockReady = $stock2 >= 1;
    var_dump($isStockReady);
    var_dump(!$isStockReady);
?>