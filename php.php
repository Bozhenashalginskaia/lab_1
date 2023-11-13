<?php
$product1 = "чайник";
$product2 = "кофейник";
$product3 = "кипятильник";

$price1 = 300;
$price2 = 150;
$price3 = 270;

$buy = ($price1 + $price2 + $price3) / 3;


echo $product1 . " => " . $price1 ."<br/>"."</tb>";
echo $product2 . " => " . $price2 ."<br/>"."</tb>";
echo $product3 . " => " . $price3 ."<br/>"."</tb>";
echo "_____________"."<br/>";
echo "средняя цена товаров = ". $buy;
echo "<table>";
echo "<tr><td>$product1</td><td>$price1</td>";
echo "<tr><td >$product2</td><td>$price2</td></tr>";
echo "<tr><td >$product3</td><td>$price3</td></tr>";

echo "<tr><td><?=$product1;?></td><td><?=$price1?></td></tr>";
echo "</table>";
?>