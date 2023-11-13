<?php
$password = $_POST["password"];

function verify($password) {

    if(($password == 123)) {
        echo "Пароль верный";
    }else {
        $p = "Ошибка в пароле";
        return $p;
        
    }
}

echo verify("123");
?>



