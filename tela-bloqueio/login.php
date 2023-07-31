

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../02cadastroProdutos/img/favico.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <a href="../tela-bloqueio/login.php">
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
            
            <button type="submit"> Entrar</button>
            <br> <br>
            <button> <a href="../inicio/home.php" style="text-decoration: none;">Conhecer Software! </a></button>
          
        </form>

        <p>Ainda não tem uma conta? <a href="cadastro.php">Cadastrar-se</a></p>

    </div>
</body>

</html>
