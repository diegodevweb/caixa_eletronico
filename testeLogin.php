<?php
   if(isset($_POST['submit'])) {
    include_once "./includes/database.php";
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $pdo->query($sql);
    print_r($result);
    if(($result->rowCount()) > 0) {
        $usuario = $_POST['usuario'];
        
        $senha = $_POST['senha'];
        header("Location: saque.php");
    } else {
        header("Location: index.php");
    }

   } 

?>


