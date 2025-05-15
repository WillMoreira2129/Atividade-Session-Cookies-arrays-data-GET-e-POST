<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {

  if (isset($_GET["nome"])) {

    $nome = $_GET["nome"];

    echo "Nome Correto " . htmlspecialchars($nome) . "!";

  } else {

    echo "Nome incorreto";

  }
}
?>