<style>
  body {
    margin: 0;
    padding: 0;
  }
  
  .header {
    background-color: black;
    color: white;
    padding: 10px;
    display: flex;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
  }
  
  .header a {
    text-decoration: none;
  }
  
  .header img {
    width: 100px; /* Ajuste o tamanho conforme necessário */
    height: auto;
    margin-right: 20px;
  }
  
  .buttons {
    margin-left: auto;
  }
  
  .buttons a {
    color: white;
    margin-left: 20px;
  }
  
  .buttons a:first-child {
    margin-left: 0; /* Remove a margem esquerda do primeiro botão */
  }
  
</style>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <title>Controle de despesas</title>
    <link rel="stylesheet" type="text/css" href="../inicio/style.css">
</head>

<body>
  <header class="header">
    <a href="../inicio/home.php">
      <img src="../img/logo.png" alt="Logo">
    </a>
    <nav class="buttons">
      <a href="../inicio/home.php">Ínicio</a>
      <a href="../tela-bloqueio/login.php">Sair</a>
    </nav>
  </header>
  <!-- Resto do conteúdo da página aqui -->
</body>
</html>

