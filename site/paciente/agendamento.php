<?php 
    
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: silver;
            
        }

        form{
            text-align: center;
            
        }

        input[type='text']{
            border-radius: 6px;
            width: 250px;
            height: 20px;
            border: 5px;
            background-color: white;
        }

        input[type='password']{
            border-radius: 6px;
            width: 250px;
            height: 20px;
            border: 5px;
            background-color: white;
        

        } 

        input[type='submit']{
            border-radius: 6px;
            width: 100px;
            height: 25px;
            border: 5px;
            background-color: yellow;
            color: blue;
            cursor: pointer;

        }
    </style>
</head>
<body>
<a href="home.php">voltar</a>
    <div>
        <form action="agendar.php" method="POST">

        <label for="">nome</label> <br>          
        <input type="text" name="nome"  required>
        <br>

        <label for="">email</label> <br>
        <input type="text" name="email" required>
        <br><br>

        <label for="">telefone</label> <br>
        <input type="text" name="telefone" required>
        <br><br>

        <label for="">aniversario</label> <br>
        <input type="text" name="aniversario" required>
         <br><br>

         <label for="">cidade</label> <br>
        <input type="text" name="cidade" required> 
        <br><br>

        <label for="">bairro</label> <br>
        <input type="text" name="bairro" required>
        <br><br>

        <label for="">estado</label> <br>
        <input type="text" name="estado" required>
         <br><br>

         <label for="">rua</label> <br>
        <input type="text" name="rua" required>
        <br><br> 

        <label for="">cep</label> <br>
        <input type="text" name="cep" required>
         <br><br>

        <label for="">Dia</label> <br>
        <input type="text" name="dia" placeholder="10/09/2020"> <br><br>

        <input type="submit" value="agendar" id="agendar">

    </form>
    </div>
</body>
</html>