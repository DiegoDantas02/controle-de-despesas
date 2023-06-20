<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../02cadastroProdutos/img/favico.png" type="image/x-icon">
</head>
<div>
    <img src="../img-login/logo.png" alt="imagem do logo da empresa" class="logo">

</div>

<body>
<script>
        // Aplica a máscara de entrada
        var phoneInput = document.getElementById("phone-input");
        phoneInput.addEventListener("input", function () {
            var value = phoneInput.value;

            // Remove todos os caracteres não numéricos
            value = value.replace(/\D/g, "");

            // Aplica a formatação desejada
            if (value.length <= 10) {
                value = value.replace(/^(\d{2})(\d{4})(\d{4})$/, "($1) $2-$3");
            } else {
                value = value.replace(/^(\d{2})(\d{5})(\d{4})$/, "($1) $2-$3");
            }

            // Atualiza o valor do campo de entrada
            phoneInput.value = value;
        });
    </script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(../img-login/contabilidade.png);
            background-size: cover;
            background-repeat: no-repeat;
            overflow: hidden;
            height: 1200px;

        }


        .container {
            width: 350px;
            margin: 0 auto;
            padding: 60px;
            background-color: white;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 120px;
            margin-left: center;

        }

        .c2 {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
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

        .escritas {
            margin-left: -200px;
        }

        .escrita {
            margin-left: -250px;
        }

        .escrit {
            margin-left: -300px;
        }

        .logo {
            position: flex;
            top: 20px;
            left: 20px;
            width: 200px;

        }

        .phone-input {
            padding: 5px;
            font-size: 16px;
        }
    </style>
    </head>

    <body>
        <div class="container">

            <h1 style="color:#45a049"> <strong>CADASTRO</strong> </h1>

            <br>
            <br>
            <br>

            <form method="POST" action="login.php">
                <div class="escrita">Nome Login:</div>
                <input type="text" name="username" placeholder="Fortuna Company" required>
                <br>
                <div class="escrit">Senha:</div>
                <input type="password" name="password" placeholder="Senha" required>
                <br>
                <div class="escritas">Nome da Empresa:</div>
                <input type="name" name="nome" placeholder="Fortuna Company" class="c2" required>
                <br>
                <div class="escrit">E-mail:</div>
                <input type="email" name="email" placeholder="email@fortuna.com.br" class="c2" required>
                <br>
                <div class="escritas">Número de contato:</div>
                <input type="text" name="telefone" id="phone-input" placeholder="celular" class="c2" required>
                <br>
                <br>
                <button type="submit">REGISTRAR</button>
            </form>

            <p>Já tem conta? <a href="login.php" style="text-decoration: none; color:#4CAF50">Faça Login</a></p>
        </div>

        
    </body>

</html>