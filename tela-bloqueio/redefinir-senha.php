<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="redefinir-senha.css">

</head>
<div>
    <img src="../img/logo.png" alt="imagem do logo da empresa" class="logo">

</div>

<body>
   
    </head>

    <body>
        <div class="container">

            <h1> <STROng>REDEFINIR SENHA</STROng> </h1>
            
            <br>
            <br>
            

            <form method="POST" action="login.php">
                <p class="descrição1">  Nome de Usuário:</p>
                <input type="text" name="username" placeholder="Fortuna Company" required>
                <br>
                <p class="descrição">Antiga Senha:</p>
                <input type="password" name="password" placeholder="Senha" required>
                <br>
                <p class="descrição">Nova Senha:</p>
                <input type="text" name="password" placeholder="Senha" required>
                <br>
                <br>
                <button type="submit">Entrar</button>
            </form>

            <p>Já tem conta? <a href="login.php">Efetuar Login</a></p>
            
        </div>
        

    </body>

</html>