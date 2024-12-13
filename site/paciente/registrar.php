<?php  
  session_start();


?>

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

        
    }

    form{
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 100px;
    }

    input[type='text']{
        border-radius: 7px;
        border-color: red;
        height: 25px;
        width: 300px;
    }

    input[type='password']{
        
        border-radius: 7px;
        border-color: red;
        height: 25px;
        width: 300px;
    }

    input[type='submit']{
        background-color: blue;
        color: white;
        cursor: pointer;
        border-radius: 5px;
        border-color: black;
    }

    input[type='submit']:hover{
        background-color: red;
    }
</style>
<body>
    <a href="entrar.php">Voltar a login</a>
    <div>
        <form action="registra.php" method="post">
            <h1>Cadastre-se</h1>
            
            <input type="text" name="nome" placeholder="nome" required> <br><br> 

            
            <input type="text" name="email" placeholder="email" required> <br><br>

             
            <input type="text" name="telefone" placeholder="telefone" required> <br><br>
           
        
            <input type="text" name="aniversario" placeholder="aniversario" required> <br><br>

             
            <input type="text" name="cidade" placeholder="cidade" required> <br><br> 

             
            <input type="text" name="bairro" placeholder="bairro" required> <br><br>
 
            
            <input type="text" name="estado" placeholder="estado" required> <br><br>

 
            <input type="text" name="rua" placeholder="rua" required> <br><br>

            
            <input type="text" name="cep" placeholder="cep" required> <br><br>

             
            <input type="password" name="senha" placeholder="senha" required> <br><br>

            <input type="submit" value="Registrar">
    
        </form>
    </div>
</body>
</html>