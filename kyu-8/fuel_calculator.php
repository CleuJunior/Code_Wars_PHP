<?php

/*
In this kata you will have to write a function that takes litres and pricePerLiter as arguments. Purchases of 2 or 
more litres get a discount of 5 cents per litre, purchases of 4 or more litres get a discount of 10 cents
per litre, and so on every two litres, up to a maximum discount of 25 cents per litre. But total discount per
liter cannot be more than 25 cents. round answer to 2 decimal places. Also you can guess that there will
not be negative or non-numeric inputs.

Good Luck!
*/

function fuel_price($litres, $price_per_liter) {
    $discount = 0.00;
    for ($i=2; $i < $litres ; $i+=2) { 
        $discount += 0.05;
        if($discount > 0.25) break;
    }
    return $price_per_liter = round($litres * ($price_per_liter - $discount), 2);
    
}

/*
    ----TESTE----
*/


echo fuel_price(5, 1.23) . "<br>"; // 5.65
echo fuel_price(8, 2.5) . "<br>"; // 18.40
echo fuel_price(5, 5.6) . "<br>"; // 27.50