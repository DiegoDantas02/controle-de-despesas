<?php
// Dados de conexão com o banco de dados
$servername = "localhost";
$username = "";
$password = "";
$dbname = "db_cadastro";

// Estabelecer conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se houve algum erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Receber os dados do formulário de login
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Consulta SQL para verificar as credenciais do usuário
$sql = "SELECT * FROM tabela_de_usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
$result = $conn->query($sql);

// Verificar se a consulta retornou algum resultado
if ($result->num_rows > 0) {
    // Credenciais válidas, usuário autenticado
    echo "Login bem-sucedido!";
} else {
    // Credenciais inválidas, exibir mensagem de erro
    echo "Login falhou. Verifique suas credenciais.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
