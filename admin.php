<?php
    
    function preenche_tabela(){
        //conexao com o server
        $servidor = "127.0.0.1";
        $usuario = "root";
        $senha_ = "";
        $db = "cadastro";
        $var = 3;
        $conexao = mysqli_connect($servidor, $usuario, $senha_, $db);
        //consulta
        $query_consulta = "SELECT email, endereco, cidade, estado, complemento FROM USUARIOS";
        $consulta_usuarios = mysqli_query($conexao, $query_consulta);   
        $contador = 0;
        $contador_aux=1;
           
        while($linha = mysqli_fetch_array($consulta_usuarios) ){
            $linha = array_filter($linha);
            if(!empty($linha)){
            //colunas
            $email_usuario = $linha['email'];
            $endereco_usuario = $linha['endereco'];
            $cidade_usuario = $linha['cidade'];
            $estado_usuario = $linha['estado'];
            $complemento_usuario = $linha['complemento'];
            echo '<tr>';
            echo '<td>'.$contador_aux.'</td>';
            echo '<td>'.$email_usuario.'</td>';
            echo '<td>'.$endereco_usuario.'</td>';
            echo '<td>'.$cidade_usuario.'</td>';
            echo '<td>'.$estado_usuario.'</td>';
            echo '<td>'.$complemento_usuario.'</td>';
            echo '</tr>';
            $contador_aux++;
            }            
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' href="CSS/estilo.css" />

    <title>Página Admin</title>
  </head>


  <body>
      <div class="container">
            <nav class="navbar  navbar-expand-sm navbar-light fixed-top border-bottom" style="background-color: #ffffff;">
                    <a class="navbar-brand ml-5" href="#" >
                      <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                      Maufe
                    </a>
                    <label></label>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active  ml-5" href="#">Produtos  </a> 
                            <a class="nav-item nav-link active  ml-2" href="#">Quem Somos  </a>
                            <a class="nav-item nav-link active  ml-2" href="#">Galeria  </a>
                            
                        </div>        
                    </div>

                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>            
                    <a class="nav-item nav-link active  ml-2" href="admin.php">Admin  </a>
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">

                            <table class="table table-dark  table-striped mt-5 ">
                                    <thead class="bg-warning">
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Endereço</th>
                                        <th scope="col">Cidade</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Complemento</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                        echo preenche_tabela();                                        
                                       ?>
                                    </tbody>
                                  </table>

                    </div>

                </div>

            </div>

            
        </div>
      

    


     <!--- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                  <a class="navbar-brand" href="#">Navbar</a>
                </div>
        </nav>
    -->    
    

    <br>
    
   <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"> Bootstrap</a>
    </nav>

-->

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>