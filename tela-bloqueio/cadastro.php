
<?php include "../inc/conexao.php"; ?>
<!-- Inclui os arquivos "header.php" e "conexao.php" localizados na pasta "../inc/" -->

<div>
    <a href="../tela-bloqueio/login.php">
        <img src="../img/logo.png" alt="imagem do logo da empresa" class="logo">
    </a>
    <!-- Cria um link (âncora) para a página "../tela-bloqueio/login.php" e exibe uma imagem do logo da empresa -->
</div>

<head>
    <!-- Início incorreto de uma nova tag <head> dentro do <body>, não é necessário -->

<body>
    <link rel="stylesheet" href="../css/cadastro.css">
    <!-- Importa o arquivo de estilos "cadastro.css" localizado na pasta "../css/" -->

    </head>
    <!-- Fim incorreto da tag <head>, não é necessário -->

    <body>
        <!-- Início incorreto de um novo <body>, não é necessário -->

        <div class="container">
            <!-- Cria uma div com a classe "container" -->

            <h1 style="color:#45a049"> <strong>CADASTRO</strong> </h1>
            <!-- Cria um cabeçalho h1 com a cor verde (#45a049) e texto em negrito "CADASTRO" -->

            <br><br><br>

            <form method="POST" action="login.php">
                <!-- Cria um formulário com o método POST e redireciona para "login.php" após o envio -->

                <div class="escrit">E-mail:</div>
                <!-- Cria uma div com a classe "escrit" e texto "E-mail:" -->

                <input type="email" name="email" placeholder="email@fortuna.com.br" class="c2" required>
                <!-- Cria uma caixa de texto para o e-mail com o atributo "required" indicando que é obrigatório preencher e a classe "c2" (não está definida no código) -->


                <br>

                <div class="escrit">Senha:</div>
                <!-- Cria uma div com a classe "escrit" e texto "Senha:" -->

                <input type="password" name="password" placeholder="Senha" required>
                <!-- Cria uma caixa de texto para a senha com o atributo "required" indicando que é obrigatório preencher -->

                <br>

                <div class="escritas">Nome da Empresa:</div>
                <!-- Cria uma div com a classe "escritas" e texto "Nome da Empresa:" -->

                <input type="name" name="nome" placeholder="Fortuna Company" class="c2" required>
                <!-- Cria uma caixa de texto para o nome da empresa com o atributo "required" indicando que é obrigatório preencher e a classe "c2" (não está definida no código) -->

                <br> <div class="escritas">Número de contato:
        </div>
        <!-- Cria uma div com a classe "escritas" e texto "Número de contato:" -->

        <input type="text" name="telefone" id="phone-input" placeholder="celular" class="c2" required>
        <!-- Cria uma caixa de texto para o número de contato com o atributo "required" indicando que é obrigatório preencher, a classe "c2" (não está definida no código) e o ID "phone-input" (não está utilizado no código) -->

        <br>
        <br>

        <button type="submit">REGISTRAR</button>
        <!-- Cria um botão de submissão do formulário com o texto "REGISTRAR" -->
        </form>

        <p>Já tem conta? <a href="login.php" style="text-decoration: none; color:#4CAF50">Faça Login</a></p>
        <!-- Cria um parágrafo com um link (âncora) para a página "login.php" com o texto "Faça Login" e a cor verde (#4CAF50) -->
        </div>

    </body>
    <!-- Fim incorreto da tag <body>, não é necessário -->

    </html>
    <!-- Fim do documento HTML -->