<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mudando dados</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <?php
        session_start();
        

        include_once "conectar.php";

      $id = $_POST['id'] ?? '';
      $sql = "SELECT * FROM pacientes WHERE id = $id";
      
      $dados = mysqli_query($connection, $sql);
      $linha = mysqli_fetch_assoc($dados)

  ?>
    
    <h1>Alteração </h1>
    <form action="editar.php" method="post">
        <label>nome</label>
        <input type="text" name="nome" required> <br><br>

        <label>email</label>
        <input type="text" name="email" required > <br><br>

        <label>telefone</label>
        <input type="text" name="telefone" required> <br><br>

        <label>aniversario</label>
        <input type="text" name="aniversario" required> <br><br>

        <label>cidade</label>
        <input type="text" name="cidade" required> <br><br>

        <label>bairro</label>
        <input type="text" name="bairro" required > <br><br>

        <label>estado</label>
        <input type="text" name="estado" required > <br><br>

        <label>rua</label>
        <input type="text" name="rua" required > <br><br>

        <label>cep</label>
        <input type="text" name="cep" required> <br><br>

        <label>senha</label>
        <input type="text" name="senha" required > <br><br>

        <input type="submit" value="Salvar Alterações" id="update">
        <input type="hidden" name="id">
    </form>

</body>
</html>