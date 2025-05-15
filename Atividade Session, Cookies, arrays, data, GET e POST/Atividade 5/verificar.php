<?php

if ($_SERVER ["REQUEST_METHOD"] == "POST") {

 $senha = $_POST["senha"];

    if (strlen($senha) >= 8) {
        echo "Senha valida";
    } else {
        echo "Senha invalida";
    }
}


?>