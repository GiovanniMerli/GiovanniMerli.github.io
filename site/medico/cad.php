<?php
   session_start();

   include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

   $Nome = $_POST["Nome"];
   $Dia_Nascimento = $_POST["Dia_Nascimento"];
   $Cpf = $_POST["Cpf"];
   $Crm = $_POST["Crm"];
   $Cidade = $_POST["Cidade"];   
   $Bairro = $_POST["Bairro"];
   $Estado = $_POST["Estado"];
   $Email = $_POST["Email"];
   $Senha = $_POST["Senha"];

$enviarDados = "INSERT INTO medicos(Nome, Dia_Nascimento, Cpf, Crm, Cidade, Bairro, Estado, Email, Senha) 
VALUES ('$Nome', '$Dia_Nascimento', '$Cpf', '$Crm', '$Cidade', '$Bairro', '$Estado', '$Email', '$Senha')";
$connection->query($enviarDados);
 
 if(isset($enviarDados)){
   echo 'Cadastrado';
 } else{
   echo 'nao cadastrado';
 }
}

$url = "cadastrar.php";

header('Location: '.$url);

$connection->close();


?>