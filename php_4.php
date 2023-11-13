<?php
// $i = 0;
// $price = 100;
// do {
// if(!$i) {
//     $price += $price*0.1;
//     $i++;
//     echo "В конце года:  ".$price.'руб. <br/>';
// } else {
//     $price += $price*0.035;
//     $i++;
//     echo "Через $i (год/а, лет):  ".$price.'руб. <br/>';
// }
// } while($price <= 150)

$price = 100;
for($i = 0; $price < 150; $i++) {
    if(!$i) {
        $price += $price*0.1;
        echo "В конце года:  ".$price.'руб. <br/>';
    } else {
        $price += $price*0.035;
        echo "Через $i года(-а, лет):  ".$price.'руб. <br/>';
    }
}
?>