
<?php
$bd_usuario= "root";
$bd_senha= "";
$bd_servidor= "localhost";
$bd_banco= "projeto";

$conexao = mysqli_connect($bd_servidor, $bd_usuario, $bd_senha, $bd_banco);

// Verifica se houve algum erro na conexão
// if ($conn->connect_error) {
//     die("Erro de conexão: " . $conn->connect_error);
// } else {
//     echo "Conexão bem-sucedida!";
// }
?>