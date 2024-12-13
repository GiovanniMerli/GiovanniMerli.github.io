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
  
    <form class="form-inline" action="listar.php" method="post">
   
     <input type="Search" style="width: 900px; text-align: center; background-color: blue"  placeholder="Pesquisar" name="buscar" class="input-group-text">
        <button type="submit" class="btn btn-success">Pesquisar</button>
    </form>
   <a href="home.php"><br>Voltar pra o inicio <br><br></a>
   <br><br>
  <tbody>
    <table class="table table-striped">
        <thead >
        <tr>
            <th scope="col">   nome</th>
            <th scope="col">   email</th>
            <th scope="col">   telefone</th>
            <th scope="col">   aniversario</th>
            <th scope="col">   cidade</th>
            <th scope="col">   bairro</th>
            <th scope="col">   estado</th>
            <th scope="col">   rua</th>
            <th scope="col">   cep</th>
        
        </tr>
        </thead>
        <tbody>
<?php 

include_once "conectar.php";

if (isset($_POST['buscar'])){
    $pesquisa = $_POST['buscar'];
}
else {
    $pesquisa = '';
}

$sql = "SELECT * FROM pacientes WHERE nome LIKE '%$pesquisa%'";

$info = mysqli_query($connection, $sql);
              
              
              while($linha = mysqli_fetch_assoc($info)){
                $id = $linha['id'];
                $nome = $linha['nome'];
                $email = $linha['email'];
                $telefone = $linha['telefone'];
                $aniversario = $linha['aniversario'];
                $cidade = $linha['cidade'];
                $bairro = $linha['bairro'];
                $estado = $linha['estado'];
                $rua = $linha['rua'];
                $cep = $linha['cep'];
                

            

                echo " <tr>
                          <th scope='row'> $nome</th>
                          <th> $email</th>
                          <th> $telefone</th>
                          <th> $aniversario</th>
                          <th> $cidade</th>
                          <th> $bairro</th>
                          <th> $estado</th>
                          <th> $rua</th>
                          <th> $cep</th>
                          <td>
                              
                              <a href='#' class='btn btn-danger ' data-toggle='modal' data-target='#confirma'
                              onclick=" .'"' ."pegar_dados($id, '$nome')" . '"' . ">Excluir</a>

                            
                          </td>
                          </tr>";
                            
            }

    
                  


         ?>



  </tbody>       
 </table>

 
 <!-- Modal -->
 <!--<div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="exemploModallabel">Confirmação de exclusão</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <form action="excluir.php" method="post">
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
    </div>
 </div>
 
 <script>
    function pegar_dados(id, nome){
        document.getElementById('nome_pessoa').innerHTML = nome;
        document.getElementById('cod_pessoa').value = id;
        document.getElementById('nome_pessoa_1').value = nome;

    }
 </script> -->
   


   


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>












