<?php 

session_start();

include "conectar.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$aniversario = $_POST["aniversario"];
$cidade = $_POST["cidade"];   
$bairro = $_POST["bairro"];
$estado = $_POST["estado"];
$rua = $_POST["rua"];
$cep = $_POST["cep"];
$dia = $_POST["dia"];

$enviarDados = "INSERT INTO agendamentos(nome, email, telefone, aniversario, cidade, bairro, estado, rua, cep, dia) 
VALUES ('$nome', '$email', '$telefone', '$aniversario', '$cidade', '$bairro', '$estado', '$rua', '$cep', '$dia')";
$connection->query($enviarDados);


$url = "agendamento.php";

header('Location: '.$url);

$connection->close();

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="agendamento.php">voltar</a>

 

</body>
</html>