<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logoff</title>
</head>
<body>
    
<form method="POST" action="cadastro.php">

    <label>Login:</label><input type="text" name="login" id="login"><br>

    <label>Senha:</label><input type="password" name="senha" id="senha"><br>

    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">


</body>

</html>