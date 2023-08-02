<?php
// Coloque aqui suas configurações do banco de dados MySQL
$servername = "localhost"; // Endereço do servidor MySQL
$username = "root"; // Nome de usuário do banco de dados
$password = " "; // Senha do banco de dados
$dbname = "usuarios"; // Nome do banco de dados

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST["new_username"]; // Obtém o novo nome de usuário do formulário
    $new_password = $_POST["new_password"]; // Obtém a nova senha do formulário

    // Conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error); // Encerra a execução e exibe a mensagem de erro em caso de falha na conexão
    }

    // Consulta no banco de dados para verificar se o usuário já existe
    $check_user_sql = "SELECT * FROM usuarios WHERE username='$new_username'";
    $check_user_result = $conn->query($check_user_sql);

    // Verifica se o usuário já existe
    if ($check_user_result->num_rows > 0) {
        echo "Usuário já existe. Tente outro nome de usuário."; // Exibe uma mensagem informando que o usuário já existe
    } else {
        // Insere o novo usuário no banco de dados
        $insert_user_sql = "INSERT INTO usuarios (username, password) VALUES ('$new_username', '$new_password')";
        if ($conn->query($insert_user_sql) === TRUE) {
            echo "Usuário cadastrado com sucesso!"; // Exibe uma mensagem informando que o usuário foi cadastrado com sucesso
        } else {
            echo "Erro ao cadastrar usuário: " . $conn->error; // Exibe uma mensagem de erro em caso de falha ao cadastrar o usuário
        }
    }

    $conn->close(); // Fecha a conexão com o banco de dados
}
?>
