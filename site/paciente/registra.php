<?php

session_start();

include "conectar.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

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

$enviarDados = "INSERT INTO pacientes(nome, email, telefone, aniversario, cidade, bairro, estado, rua, cep, senha ) VALUES 
('$nome', '$email', '$telefone', '$aniversario', '$cidade', '$bairro', '$estado', '$rua', '$cep', '$senha')";
$connection->query($enviarDados);

}




$url = "registrar.php";

header('Location: '.$url);

$connection->close();

?>