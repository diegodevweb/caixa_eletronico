<?php 
    include "./includes/database.php";
    include "./includes/config.php";   
?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <title>Sistema de Saque</title>
</head>
<body>
<form action="testeLogin.php" method="post">
    <div>
        <h1>Login</h1>
        <input type="text" placeholder="Nome" name="usuario" class="valor">
        <br><br>
        <input type="password" placeholder="Senha" name="senha" class="valor">
        <br><br>
        <input type="submit" value="Entrar" name="submit" class="confirmar">
    </div>
</form>
</body>
</html>