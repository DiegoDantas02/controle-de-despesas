<?php include "../inc/header.php";?>
<?php include "../inc/conexao.php";?>
<div>
<a href="../tela-bloqueio/login.php">
    <img src="../img/logo.png" alt="imagem do logo da empresa" class="logo">
</a>


</div>
<head>

<body>
<link rel="stylesheet" href="../css/cadastro.css">
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