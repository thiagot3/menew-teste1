<?php 

include ('connect.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);


$sql = "INSERT INTO agenda (nome, email, telefone, cidade, estado, categoria) VALUES('$nome','$email','$telefone','$cidade', '$estado', '$categoria')";

mysqli_query($connect, $sql);

if(mysqli_affected_rows($connect) > 0){
    echo "Cadastrado com Sucesso!";
  }else{
    echo "Não Foi Possivel Cadastrar";
  }

mysqli_close($connect);
?>