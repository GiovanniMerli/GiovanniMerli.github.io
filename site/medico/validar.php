<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<style>
  body{
    background-color: silver;
    text-align: center;
  }  
 
  a{
      text-decoration: none;
   }
</style>
<body>
   <a href="Login.php">voltar a logar</a>
</body>
</html>

<?php

 
session_start();


include "conexao.php";


if (isset($_POST['email'])){
    $pesquisa = $_POST['email'];
    $senha = $_POST['senha'];
}
else {
    $pesquisa = '';
    $Senha = '';
}

$sqlemail = "SELECT * FROM medicos WHERE email LIKE '$pesquisa'";

$dados = mysqli_query ($connection, $sqlemail);

if ($linha = mysqli_fetch_assoc($dados))
{
    if ($senha == $linha['Senha']){

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header("Location: sistema.php");
    }
    else {

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo "Usuário existe mas, senha inválida";
    }
}   
else {
    echo "Usuário não existe, cadastre-se";
}


?>
