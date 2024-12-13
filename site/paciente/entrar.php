<?php  
   session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entrar paciente</title>
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
        background-color: yellowgreen;
        width: 260px;
        height: 200px;
        text-align: center;
        padding: 80px;
        margin: 40px auto;
        border-radius: 19px;
        border: 5px;
        border-color: blue;
    }

    a{
        text-decoration: none;
        
    }
</style>
<body>
  <a href="/site/opcao.php">tela inicial</a>
    <div>
        <?php 
         
        
        
        ?>
        <form action="verificar.php" method="post">
            <h1>Login</h1>
            <input type="text" name="email" placeholder="Email"> <br> <br>
            
            <input type="password" name="senha" placeholder="Senha"> <br><br>

            <input type="submit" value="Entrar">  <a href="registrar.php">Esqueci senha</a>
        </form>
    </div>
</body>
</html>