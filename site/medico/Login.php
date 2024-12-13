<?php 
// verificar
session_start();
/*if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: Login.php');
}
*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="site/opcao.php">
    
</head>
<style>
    body{
        background-color: silver;
    }

    input[type='text']{
        color: black;
        border-radius: 6px;
        width: 200px;
        height: 30px;
    }

    input[type='password']{
        color: black;
        border-radius: 6px;
        width: 200px;
        height: 30px;
    }

    input[type='submit']{
        background-color: blueviolet;
        color: whitesmoke;
        border-radius: 5px;
        width: 100px;
        cursor: pointer;
    }

    form{
        background-color: pink;
        width: 260px;
        height: 200px;
        text-align: center;
        padding: 80px;
        margin: 40px auto;
        border-radius: 19px;
        border: 5px;
        border-color: blue;
    }
</style>
<body>
    <a href="/site/opcao.php">tela inicial</a>
    <div>
        <form  method="post" action="validar.php">
           <h1>Login</h1> 
            <input type="text" placeholder="Email" name="email" id="email" required> <br> <br>

            <input type="password" name="senha" id="password" placeholder="Senha" required> <br><br>

            <input type="submit" value="Entrar">  <a href="cadastrar.php">Esqueci senha</a>
        </form>
    </div>
</body>
</html>