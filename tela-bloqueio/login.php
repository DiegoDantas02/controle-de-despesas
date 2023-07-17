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
        .desc{
            margin-left: -300px;
        }
        .desc1{
            margin-left: -230px;
        }
        .logo{
            width: 200px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <a href="../inicio//home.html">
    <img src="../img/logo.png" alt="imagem do logo da empresa" class="logo">
    </a>
    <div class="container">
        <h1>LOGIN</h1>  
<br><br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Faça a validação e o processamento do formulário aqui

    // Exemplo de verificação simples (apenas para fins ilustrativos)
    if ($username === "usuario" && $password === "senha") {
        echo "<p>Login realizado com sucesso!</p>";
        // Redireciona para a página desejada após o login bem-sucedido
        header("Location: index.html");
        exit; // Termina a execução do script para evitar que o restante do código seja executado
    } else {
        echo "<p>Nome de usuário ou senha inválidos!</p>";
    }
}
?>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <P class="desc1">Nome de Usuário:</P>
    <input type="text" name="username" placeholder="Nome de usuário" required>
    <br>
    <p class="desc">Senha:</p>
    <input type="password" name="password" placeholder="Senha" required>
    <br>
    <br>
    <button type="submit">Entrar<a></button>
</form>

<p>Ainda não tem uma conta? <a href="cadastro.php">Cadastrar-se</a></p>


</body>

</html>
