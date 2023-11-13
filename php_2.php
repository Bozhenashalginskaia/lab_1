<?php
$product1 = "чайник";
$product2 = "кофейник";
$product3 = "кипятильник";

$price1 = 300;
$price2 = 150;
$price3 = 270;

if ($price1 > $price3 && $price1 > $price2) {
    echo "самый дорогой " .$product1;  
} elseif ($price2 > $price1 && $price2 > $price3) {
echo "самый дорогой " .$product2; 
}else {
    echo "самый дорогой " .$product3;  
}
?>