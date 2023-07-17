<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<div>
    <img src="../img/logo.png" alt="imagem do logo da empresa" class="logo">

</div>

<body>
   
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url(../img/doisboss.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            overflow: hidden;
        }


        .container {
            width: 350px;
            margin: 0 auto;
            padding: 90px;
            background-color: darkgray;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 100px;
            margin-left: center;

        }

            .container input[type="text"],
            .container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
        }

        .container button:hover {
            background-color: #45a049;
        }
        .descrição{
            margin-left: -250px;
        }
        .descrição1{
            margin-left: -210px;
        }
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 100px;
            
        }
    </style>
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