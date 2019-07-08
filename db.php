
<?php
//conexao com o server
$servidor = "127.0.0.1";
$usuario = "root";
$senha_ = "";
$db = "cadastro";
$var = 3;
$conexao = mysqli_connect($servidor, $usuario, $senha_, $db);

//pegando dados do forms de cadastro
$email_usuario = $_POST['inputemail'];
$senha_usuario = $_POST['inputpassword'];
$endereco_usuario = $_POST['inputendereco'];
$cidade_usuario = $_POST['inputenderecocidade'];
$estado_usuario = $_POST['inputenderecoestado'];
$complemento_usuario = $_POST['inputenderecocomplento'];


//Algumas querys 

//inserção
$query_insere = "INSERT INTO Usuarios(email, senha, endereco, cidade, estado, complemento) VALUES ('$email_usuario',
 '$senha_usuario', '$endereco_usuario', '$cidade_usuario', '$estado_usuario', '$complemento_usuario')";

mysqli_query($conexao, $query_insere);


header("Location: /FormsBD/paginainicial.html");