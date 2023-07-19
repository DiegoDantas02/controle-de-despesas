<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../02cadastroProdutos/img/favico.png" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url(../img/mesa.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 350px;
            padding: 100px;
            background-color: #fff;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 100px;
        }

        .container h1 {
            margin-bottom: 20px;
            color: #4CAF50;
        }

        .container input[type="text"],
        .container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .container button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            border: none;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .container button:hover {
            background-color: #45a049;
        }

        .container p {
            margin-top: 20px;
            font-size: 14px;
        }

        .container p a {
            color: #4CAF50;
            text-decoration: none;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 100px;
        }

        .desc {
            margin-left: -300px;
        }

        .desc1 {
            margin-left: -230px;
        }

        .logo {
            width: 200px;
            cursor: pointer;
        }
    </style>
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
