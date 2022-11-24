<!DOCTYPE html>
<?php 
    include "./includes/database.php";
    include "./includes/config.php";  
    
?>
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
    <div>
        <?php
            $valor = intval($_POST['valor']) ?? null;
            $nota200 = 0;
            $nota100 = 0;
            $nota50  = 0;
            $nota20  = 0;
            $nota10  = 0;
            $nota5   = 0;
            $nota2   = 0;
            $nota1   = 0;

            if($valor > 2000) {
                echo "Valor máximo de saque: R$2.000.";
            }elseif ($valor != 0) {
                while ($valor >= 100) {
                    $nota100++;
                    $valor -= 100;
                }
                while ($valor >= 50) {
                    $nota50++;
                    $valor -= 50;
                }

                while ($valor >= 20) {
                    $nota20++;
                    $valor -= 20;
                }

                while ($valor >= 10) {
                    $nota10++;
                    $valor -= 10;
                }

                while ($valor >= 5) {
                    $nota5++;
                    $valor -= 5;
                }

                while ($valor >= 2) {
                    $nota2++;
                    $valor -= 2;
                }

                echo "A quantidade de notas 100 é: " . "$nota100";
                echo "</br>A quantidade de notas 50 é: " . "$nota50";
                echo "</br>A quantidade de notas 20 é: " . "$nota20";
                echo "</br>A quantidade de notas 10 é: " . "$nota10";
                echo "</br>A quantidade de notas 5 é: " . "$nota5";
                echo "</br>A quantidade de notas 2 é: " . "$nota2</br></br>";
            } else {
               echo "insira um valor válido";
            }

            $total = $nota100 + $nota50 + $nota20 + $nota10 + $nota5 + $nota2;            
        ?>
            <a href="saque.php"><button class="buttonSaque">Novo Saque</button></a>
            <a href="index.php"><button class="buttonSaque">Sair</button></a>         
    </div>
</body>
</html>