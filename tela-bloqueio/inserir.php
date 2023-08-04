<?php
include "../inc/conexao.php";

$email = $_POST["email"];
$senha = $_POST["senha"];
$contato = $_POST["contato"];
$nome_empresa = $_POST["nome_empresa"];


$sql = "insert into ongs( email, contato,  senha, nome_empresa) values( '$email', '$senha','$contato', '$nome_empresa')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: ../paginas/login.php");

?>
