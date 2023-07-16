
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <title>Controle de despesas</title>
</head>

<!-- inicio cabeçalho -->

</head>
<body>
  <header>
    <img src="../img/logo.png" alt="Logo">
    <div class="buttons">
      <a href="../inicio/home.php" >Ihomnício</a>
      <a href="../tela-bloqueio/login.php">Sair</a>
    </div>
  </header>
<!-- Fim do cabeçalho -->

<body>
    <h2>Controle de despesas</h2>

    <div class="container">
        <h4>Saldo atual</h4>

        <h1 id="balance" class="balance">R$ 0.00</h1>

        <div class="inc-exp-container">
            <div class="cor-receitas">
                <h4>Receitas</h4>
                <p id="money-plus" class="money plus">+ R$0.00</p>
            </div>

            <div class="cor-despesas">
                <h4>Despesas</h4>
                <p id="money-minus" class="money minus">- R$0.00</p>
            </div>
        </div>

        <h3>Transações</h3>

        <ul id="transactions" class="transactions"></ul>

        <h3>Adicionar transação</h3>

        <form id="form">
            <div class="form-control">
                <label for="text">Nome</label>
                <input autofocus type="text" id="text" placeholder="Nome da transação" />
            </div>

            <div class="form-control">
                <label for="amount">Valor <br />
                    <small>(negativo - despesas, positivo - receitas)</small>
                </label>
                <input type="number" id="amount" placeholder="Valor da transação" />
            </div>

            <button class="btn meu-botao ">Adicionar</button>
        </form>
    </div>

    <script src="script.js"></script>
<?php include "../inc/rodape.php";?>
