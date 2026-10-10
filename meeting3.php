<?php
    // Area and Circumference of Circle
    $radius = 5;
    $area = M_PI * $radius * $radius;
    $circumference = 2 * M_PI * $radius;
    echo "Area of Circle: $area";
    echo "Circumference of Circle: $circumference";

    // Temperature Conversion
    $celcius = 25;
    $fahrenheit = ($celcius * 9/5) + 32;
    echo "Fahrenheit: $fahrenheit";

    // Even or Odd
    $number = 10;
    $isEven = $number % 2 == 0;
    $isOdd = $number % 2 != 0;
    echo "Is Even: $isEven";
    echo "Is Odd: $isOdd";

    // Purchase Discounts
    $price = 2000;
    $discount = 20;

    $discountAmount = ($price * $discount) / 100;
    $finalPrice = $price - $discountAmount;
    echo "discountAmount: $discountAmount";
    echo "finalPrice: $finalPrice";
?>