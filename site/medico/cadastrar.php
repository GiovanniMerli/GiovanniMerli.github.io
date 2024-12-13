<?php
     session_start();
    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: gray;
            
        
        }

        form{
            background-color: blueviolet;
            border-radius: 7px;
            height: 640px;
            width: 400px;
            margin: 40px auto;
            text-align: center;
               
            
        }

        input[type='text']{
            border-radius: 5px;
            width: 300px;
            height: 25px;
            
        }

        input[type='password']{
            border-radius: 5px;
            width: 300px;
            height: 25px;
        }

        input[type='submit']{
            background-color: blue;
            color: white;
            cursor: pointer;
               
        }

        input[type='submit']:hover{
            background-color: black;
        }

    </style>
</head>
<body>
<a href="Login.php">Entrar</a>
    <div>
        <form action="cad.php" method="post">
            <label for="">Nome</label> <br>
            <input type="text" name="Nome" placeholder="nome" required> <br><br>

            <label for="">Data Nascimento</label> <br>
            <input type="text"  name="Dia_Nascimento" placeholder="01/02/2000" required> <br><br>

            <label for="">Cpf</label> <br>
            <input type="text"  name="Cpf" placeholder="013.123.456-01" required> <br><br>

            <label for="">Crm</label> <br>
            <input type="text"  name="Crm" required> <br><br>

            <label for="">Cidade</label> <br>
            <input type="text" name="Cidade" required> <br><br>

            <label for="">Bairro</label> <br>
            <input type="text"  name="Bairro" placeholder="bairro" required> <br><br>

            <label for="">Estado</label> <br>
            <input type="text"  name="Estado" required> <br><br>

            <label for="">Email</label> <br>
            <input type="text"  name="Email" required> <br><br>

            <label for="">Senha</label> <br>
            <input type="password"  name="Senha" placeholder="Senha"  required> <br><br>
             
           <input type="submit"  value="Cadastrar"> 
            
            
        </form>
    </div>
</body>
</html>