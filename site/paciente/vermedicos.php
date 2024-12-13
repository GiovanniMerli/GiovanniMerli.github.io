<?php
     session_start();    
      
    
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
    <form class="form-inline" action="pesquisar.php" method="post">
   
     <input type="Search" style="width: 900px; text-align: center; background-color: silver"  placeholder="Pesquisar" name="buscar" class="input-group-text">
        <button type="submit" class="btn btn-success">Pesquisar</button>
    </form>
   <a href="Home.php"><br>Voltar <br><br></a>
   <br><br>
  <tbody>
    <table class="table table-striped">
        <thead >
        <tr>
            <th scope="col">   Nome</th>
            <th scope="col">   Dia_Nascimento</th>
            <th scope="col">   Cpf</th>
            <th scope="col">   Crm</th>
            <th scope="col">   Cidade</th>
            <th scope="col">   Bairro</th>
            <th scope="col">   Estado</th>
            <th scope="col">   Email</th>
        </tr>
        </thead>
        <tbody>
<?php 

include_once "conectar.php";

if (isset($_POST['buscar'])){
    $pesquisar = $_POST['buscar'];
}
else {
    $pesquisar = '';
}

$sql = "SELECT * FROM medicos WHERE nome LIKE '%$pesquisar%'";

$dados = mysqli_query($connection, $sql);
              
              
              while($linha = mysqli_fetch_assoc($dados)){
                $id = $linha['id'];
                $Nome = $linha['Nome'];
                $Dia_Nascimento = $linha['Dia_Nascimento'];
                $Cpf = $linha['Cpf'];
                $Crm = $linha['Crm'];
                $Cidade = $linha['Cidade'];
                $Bairro = $linha['Bairro'];
                $Estado = $linha['Estado'];
                $Email = $linha['Email'];

            

                echo " <tr>
                          <th scope='row'> $Nome</th>
                          <th> $Dia_Nascimento</th>
                          <th> $Cpf</th>
                          <th> $Crm</th>
                          <th> $Cidade</th>
                          <th> $Bairro</th>
                          <th> $Estado</th>
                          <th> $Email</th>
                          
                       </tr>";  
            }

    
                  


         ?>



  </tbody>       
 </table>

 
 <!-- Modal -->
 <!-- <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="exemploModallabel">Confirmação de exclusão</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <form action="excluir_script.php" method="post">
                <p>Deseja realmente excluir?</p>
                <p id="nome_pessoa">Nome da pessoa</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                <input type="hidden" name="nome" id="nome_pessoa_1" value="">
                <input type="hidden" name="id" id="cod_pessoa" value="">
                <input type="submit" class="btn btn-danger" value="Sim">
        </form>
            </div>
        </div>
    </div>  -->
 </div>
 
 <script>
    function pegar_dados(id, nome){
        document.getElementById('nome_pessoa').innerHTML = nome;
        document.getElementById('cod_pessoa').value = id;
        document.getElementById('nome_pessoa_1').value = nome;

    }
 </script>
   


   


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>












