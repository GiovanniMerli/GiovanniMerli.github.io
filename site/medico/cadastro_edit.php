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
        

        include_once "conexao.php";

      $id = $_GET['id'] ?? '';
      $sql = "SELECT * FROM medicos WHERE id = $id";
      
      $dados = mysqli_query($connection, $sql);
      $linha = mysqli_fetch_assoc($dados)

  ?>

    <h1>Alteração </h1>
    <form action="edit_script.php" method="post">
        <label>Nome</label>
        <input type="text" name="Nome" required value="<?php echo $linha['Nome'];?>">

        <label>Data Nascimento</label>
        <input type="text" name="Dia_Nascimento" required value="<?php echo $linha['Dia_Nascimento'];?>">

        <label>Cpf</label>
        <input type="text" name="Cpf" required value="<?php echo $linha['Cpf'];?>">

        <label>Crm</label>
        <input type="text" name="Crm" required value="<?php echo $linha['Crm'];?>">

        <label>Cidade</label>
        <input type="text" name="Cidade" required value="<?php echo $linha['Cidade'];?>">

        <label>Bairro</label>
        <input type="text" name="Bairro" required value="<?php echo $linha['Bairro'];?>">

        <label>Estado</label>
        <input type="text" name="Estado" required value="<?php echo $linha['Estado'];?>">

        <label>Email</label>
        <input type="text" name="Email" required value="<?php echo $linha['Email'];?>">

        <label>Senha</label>
        <input type="text" name="Senha" required value="<?php echo $linha['Senha'];?>">

        <input type="submit" value="Salvar Alterações" id="update">
        <input type="hidden" name="id" value="<?php echo $id?>">
    </form>
    <a href="pesquisar.php">Pesquisar</a>



</body>
</html>