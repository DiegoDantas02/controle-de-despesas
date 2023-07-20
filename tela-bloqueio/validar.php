<?php
// Arquivo: validar.php

// Verifica se a requisição foi feita através do método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os campos do formulário foram preenchidos
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "Por favor, preencha todos os campos.";
    } else {
        // Inclui o arquivo de conexão com o banco de dados
        require_once('../inc/conexao.php');

        // Obtém os dados do formulário e faz o tratamento para evitar injeção de SQL
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);

        // Consulta SQL para verificar se o usuário já existe no banco de dados
        $query = "SELECT * FROM db_login WHERE username='$username'";
        $result = $conn->query($query);

        // Exibe o conteúdo da tabela "db_login" (apenas para fins de depuração)
        echo "Conteúdo da tabela db_login:<br>";
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row['id'] . ", Username: " . $row['username'] . ", Hashed Password: " . $row['hashed_password'] . "<br>";
        }

        // Verifica se ocorreu algum erro na consulta
        if (!$result) {
            die("Erro na consulta: " . $conn->error);
        }

        // Verifica se o usuário existe no banco de dados
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashed_password = $row['hashed_password'];

            // Verifica a senha usando password_verify()
            if (password_verify($password, $hashed_password)) {
                // Redireciona para a página home.php quando o login for bem-sucedido
                header("Location: ../inicio/home.php");
                exit();
            } else {
                // Mostra mensagem de erro na tela de login se a senha estiver incorreta
                echo "Senha incorreta. Usuário encontrado: " . $username;
            }
        } else {
            // Mostra mensagem de erro na tela de login se o usuário não existir
            echo "Usuário não encontrado. Usuário fornecido: " . $username;
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    }
} else {
    // Redireciona para a página de login caso alguém tente acessar diretamente esse arquivo
    header("Location: ../tela-bloqueio/login.php");
    exit();
}
?>
