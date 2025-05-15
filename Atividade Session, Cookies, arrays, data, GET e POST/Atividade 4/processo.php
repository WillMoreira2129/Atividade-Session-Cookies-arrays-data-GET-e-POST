<?php
if (isset($_GET['opcao'])) {
  $opcao_selecionada = $_GET['opcao'];
  echo "Você selecionou: " . $opcao_selecionada;
} else {
  echo "Nenhuma opção selecionada.";
}
?>