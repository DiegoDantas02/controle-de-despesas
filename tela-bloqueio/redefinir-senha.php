<!DOCTYPE html>
<!-- Declaração do tipo de documento como HTML5 -->

<html lang="pt-br">
<!-- Início da tag <html> com o atributo de linguagem "pt-br" (Português do Brasil) -->

<head>
    <!-- Início da seção <head> que contém metadados, links para recursos e informações da página -->

    <meta charset="UTF-8">
    <!-- Declara o conjunto de caracteres como UTF-8 (Unicode Transformation Format 8 bits) -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Define a escala inicial do viewport como 1.0, permitindo que o conteúdo se ajuste ao tamanho da tela do dispositivo -->

    <link rel="shortcut icon" href="../02cadastroProdutos/img/favico.png" type="image/x-icon">
    <!-- Define o ícone da página, o arquivo "favico.png" localizado na pasta "../02cadastroProdutos/img/" -->

    <link rel="stylesheet" href="../css/login.css">
    <!-- Importa o arquivo de estilos "login.css" localizado na pasta "../css/" -->

</head>
<!-- Fim da seção <head> -->

<body>
    <!-- Início da seção <body> que contém o conteúdo visível da página -->

    <a href="../tela-bloqueio/login.php">
        <!-- Cria um link (âncora) para a página "login.php" localizada na pasta "../tela-bloqueio/" -->

        <img src="../img/logo.png" alt="imagem do logo da empresa" class="logo">
        <!-- Cria uma imagem do logo da empresa com o atributo "alt" indicando a descrição da imagem e a classe "logo" para estilização -->

    </a>
    <!-- Fim do link (âncora) -->

    <div class="container">
        <!-- Cria uma div com a classe "container" -->

        <h1>LOGIN</h1>
        <!-- Cria um cabeçalho h1 com o texto "LOGIN" -->

        <br><br>

        <form method="POST" action="../tela-bloqueio/validar.php">
            <!-- Cria um formulário com o método POST e redireciona para "validar.php" após o envio -->

            <p class="desc1">Nome de Usuário:</p>
            <!-- Cria um parágrafo com a classe "desc1" e texto "Nome de Usuário:" -->

            <input type="text" name="username" placeholder="Nome de usuário" required>
            <!-- Cria uma caixa de texto para o nome de usuário com o atributo "required" indicando que é obrigatório preencher -->

            <br>

            <p class="desc">Senha:</p>
            <!-- Cria um parágrafo com a classe "desc" e texto "Senha:" -->

            <input type="password" name="password" placeholder="Senha" required>
            <!-- Cria uma caixa de texto para a senha com o atributo "required" indicando que é obrigatório preencher -->

            <br><br>

            <button type="submit">Entrar</button>
            <!-- Cria um botão de submissão do formulário com o texto "Entrar" -->

            <br><br>

            <button> <a href="../inicio/home.php" style="text-decoration: none;">Conhecer Software! </a></button>
            <!-- Cria um botão com um link (âncora) para a página "home.php" localizada na pasta "../inicio/" com o texto "Conhecer Software!" e estilização para remoção do sublinhado -->

        </form>

        <p>Ainda não tem uma conta? <a href="cadastro.php">Cadastrar-se</a></p>
        <!-- Cria um parágrafo com um link (âncora) para a página "cadastro.php" com o texto "Cadastrar-se" -->

    </div>
    <!-- Fim da div com a classe "container" -->

</body>
<!-- Fim da seção <body> -->

</html>
<!-- Fim do documento HTML -->
