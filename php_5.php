<?php

$product = array ("карандаши", "ручки", "тетради", "бумага", "книги");
array_push($product, "текстовыделители", "ластики");
print_r($product);
echo "</br>Количество элементов массиве:</br>" . count($product);

for($i=0; $i<count($product); $i++){
    $s = sort($product);
    print_r("</br>Название товаров: "."{$product[$i]}</br>");
    print_r("</br>Название товаров: "."{$product[$i]}</br>");
}
?>
