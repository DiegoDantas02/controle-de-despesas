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

        <?php
        session_start();
        include('../inc/conexao.php');

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $mysqli->real_escape_string($_POST['username']);
            $password = $mysqli->real_escape_string($_POST['password']);

            if (empty($username)) {
                echo "Preencha o nome de usuário!";
            } elseif (empty($password)) {
                echo "Preencha a senha!";
            } else {
                $sql_code = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
                $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

                $quantidade = $sql_query->num_rows;

                if ($quantidade == 1) {
                    $usuario = $sql_query->fetch_assoc();

                    $_SESSION['user'] = $usuario['id'];
                    $_SESSION['name'] = $usuario['nome'];

                    header("Location: dashboard.php");
                    exit();
                } else {
                    echo "Falha ao logar! Nome de usuário ou senha incorretos";
                }
            }
        }
        ?>
    </div>
</body>

</html>
