<?php  
    session_start();
    
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="editar.php">
</head>
<body>
      
    <?php

 include_once "conectar.php";

   $id = $_POST['id'];
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $aniversario = $_POST['aniversario'];
   $cidade = $_POST['cidade'];
   $bairro = $_POST['bairro'];
   $estado = $_POST['estado'];
   $rua = $_POST['rua'];
   $cep = $_POST['cep'];
   $senha = $_POST['senha'];

$sql = "UPDATE pacientes SET nome = '$nome', email = '$email',
      telefone = '$telefone', aniversario = '$aniversario', cidade = '$cidade', bairro = '$bairro', estado = '$estado', 
      rua = '$rua', cep = '$cep', senha = '$senha' WHERE id = $id";

$info = mysqli_query($connection, $sql);
      
    ?>

    
    <a href="home.php">Voltar ao inicio <br></a>
    <a href="listar.php">Voltar a pesquisa</a>
</body>
</html>
