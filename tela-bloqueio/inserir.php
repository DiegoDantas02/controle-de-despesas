<?php
include "../inc/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["usuario"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cnpj_cpf = $_POST["cnpj_cpf"];
$senha = $_POST["senha"];

$sql = "insert into ongs(nome, email, telefone, endereco, bairro, cidade, estado, cnpj_cpf, senha) values('$nome', '$email', '$telefone', '$endereco', '$bairro', '$cidade', '$estado', '$cnpj_cpf', '$senha')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: ../paginas/login.php");

?>
