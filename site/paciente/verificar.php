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
   <a href="entrar.php">voltar a logar</a>
</body>
</html>

<?php

 
session_start();


include "conectar.php";


if (isset($_POST['email'])){
    $pesquisa = $_POST['email'];
    $senha = $_POST['senha'];
}
else {
    $pesquisa = '';
    $Senha = '';
}

$sqlemail = "SELECT * FROM pacientes WHERE email LIKE '$pesquisa'";

$info = mysqli_query ($connection, $sqlemail);

if ($linha = mysqli_fetch_assoc($info))
{
    if ($senha == $linha['senha']){

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header("Location: home.php");
    }
    else {

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo "<script> alert('Usuário existe mas, senha inválida') </script>";
    }
}   
else {
    echo "<script> alert('Usuário não existe, cadastre-se') </script>";
}


?>
