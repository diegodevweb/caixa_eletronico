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
  <form action="confirmaSaque.php" method="post">
      <div>
          <h1 class="saque">Saque</h1>
            <input type="number" placeholder="Valor" name="valor" min="2" class="valor">
            <input type="submit" value="Confirmar" name="confirmar" class="confirmar">
            <!--<a href="index.php"><button class="buttonSaque">Sair</button></a> -->
      </div>
  </form>
</body>
</html>