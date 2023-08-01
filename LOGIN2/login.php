<?php
// Coloque aqui suas configurações do banco de dados MySQL
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "usuarios";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consulta no banco de dados para verificar as credenciais do usuário
    $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // Verifica se o usuário foi encontrado
    if ($result->num_rows > 0) {
        echo "Login realizado com sucesso!";
    } else {
        echo "Usuário ou senha incorretos.";
    }

    $conn->close();
}
?>
