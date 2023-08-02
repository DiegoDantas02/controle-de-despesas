<?php
// Coloque aqui suas configurações do banco de dados MySQL
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "usuarios";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST["new_username"];
    $new_password = $_POST["new_password"];

    // Conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consulta no banco de dados para verificar se o usuário já existe
    $check_user_sql = "SELECT * FROM usuarios WHERE username='$new_username'";
    $check_user_result = $conn->query($check_user_sql);

    // Verifica se o usuário já existe
    if ($check_user_result->num_rows > 0) {
        echo "Usuário já existe. Tente outro nome de usuário.";
    } else {
        // Insere o novo usuário no banco de dados
        $insert_user_sql = "INSERT INTO usuarios (username, password) VALUES ('$new_username', '$new_password')";
        if ($conn->query($insert_user_sql) === TRUE) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário: " . $conn->error;
        }
    }

    $conn->close();
}
?>
