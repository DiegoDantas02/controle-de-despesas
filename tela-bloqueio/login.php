<?php
// Arquivo: login.php

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

        // Consulta SQL para verificar se o usuário existe no banco de dados
        $query = "SELECT * FROM db_login WHERE username='$username'";
        $result = $conn->query($query);

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
                echo "Usuário ou senha incorretos.";
            }
        } else {
            // Mostra mensagem de erro na tela de login se o usuário não existir
            echo "Usuário ou senha incorretos.";
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

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../02cadastroProdutos/img/favico.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <a href="../inicio/home.html">
        <img src="../img/logo.png" alt="imagem do logo da empresa" class="logo">
    </a>
    <div class="container">
        <h1>LOGIN</h1>
        <br><br>

        <form method="POST" action="../tela-bloqueio/validar.php">
            <p class="desc1">Nome de Usuário:</p>
            <input type="text" name="username" placeholder="Nome de usuário" required>
            <br>
            <p class="desc">Senha:</p>
            <input type="password" name="password" placeholder="Senha" required>
            <br>
            <br>
            <button type="submit">Entrar</button>
        </form>

        <p>Ainda não tem uma conta? <a href="cadastro.php">Cadastrar-se</a></p>

    </div>
</body>

</html>
