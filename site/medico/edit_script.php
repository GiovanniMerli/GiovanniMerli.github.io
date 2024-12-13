<?php  
    session_start();
    
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="edit_script.php">
</head>
<body>
    <div class="row">
      
    <?php

 include_once "conexao.php";

   $id = $_POST['id'];
   $Nome = $_POST['Nome'];
   $Dia_Nascimento = $_POST["Dia_Nascimento"];
   $Cpf = $_POST["Cpf"];
   $Crm = $_POST["Crm"];
   $Cidade = $_POST["Cidade"];   
   $Bairro = $_POST["Bairro"];
   $Estado = $_POST["Estado"];
   $Email = $_POST["Email"];
   $Senha = $_POST["Senha"];
$sql = "UPDATE medicos SET Nome = '$Nome', Dia_Nascimento = '$Dia_Nascimento',
      Cpf = '$Cpf', Crm = '$Crm', Cidade = '$Cidade', Bairro = '$Bairro', Estado = '$Estado', 
      Email = '$Email', Senha = '$Senha' WHERE id = $id";

$dados = mysqli_query($connection, $sql);
      
    ?>

    </div>
    <a href="login.php">Voltar ao inicio <br></a>
    <a href="pesquisar.php">Voltar a pesquisa</a>
</body>
</html>
