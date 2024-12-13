<?php
    session_start();
    //    print_r($_SESSION);
    
        if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
            
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('location: Login.php');
        }
        $logado = $_SESSION['email'];


        $logado = $_SESSION['email'];
        echo "<h1> Bem vindo $logado</h1>"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area do medico</title>
    <style>
        nav a{
            text-decoration: none;
            color: white;
            background-color: red;
            cursor: pointer;
            font: 100;

        }
    </style>
</head>
<body>
    <nav>
        <a href="sair.php">Sair</a>
    </nav>
    <br><br><br>
    <button type="button">Acompanhe consultas</button>
    
</body>

</html>