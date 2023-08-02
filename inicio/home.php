<?php include "../inc/header.php"; ?> <!-- Inclui o arquivo de cabeçalho (header.php) no código -->
<?php include "../inc/conexao.php"; ?> <!-- Inclui o arquivo de conexão com o banco de dados (conexao.php) no código -->

<body>
    <h2>Controle de despesas</h2> <!-- Título principal da página -->

    <div class="container"> <!-- Div principal da página -->
        <h4>Saldo atual</h4> <!-- Título para o saldo atual -->

        <h1 id="balance" class="balance">R$ 0.00</h1> <!-- Elemento que exibirá o saldo atual com o valor inicial de R$ 0.00 -->

        <div class="inc-exp-container"> <!-- Div para exibir as receitas e despesas -->
            <div class="cor-receitas"> <!-- Div para exibir as receitas -->
                <h4>Receitas</h4> <!-- Título para as receitas -->
                <p id="money-plus" class="money plus">+ R$0.00</p> <!-- Elemento que exibirá o valor total das receitas -->
            </div>

            <div class="cor-despesas"> <!-- Div para exibir as despesas -->
                <h4>Despesas</h4> <!-- Título para as despesas -->
                <p id="money-minus" class="money minus">- R$0.00</p> <!-- Elemento que exibirá o valor total das despesas -->
            </div>
        </div>

        <h3>Transações</h3> <!-- Título para a lista de transações -->

        <ul id="transactions" class="transactions"></ul> <!-- Lista não ordenada (ul) para exibir as transações -->

        <h3>Adicionar transação</h3> <!-- Título para o formulário de adição de transações -->

        <form id="form"> <!-- Formulário para adicionar transações -->
            <div class="form-control"> <!-- Div para cada campo do formulário -->
                <label for="text">Nome</label> <!-- Rótulo do campo de entrada "Nome" -->
                <input autofocus type="text" id="text" placeholder="Nome da transação" /> <!-- Campo de entrada para o nome da transação -->
            </div>

            <div class="form-control"> <!-- Div para cada campo do formulário -->
                <label for="amount">Valor <br />
                    <small>(negativo - despesas, positivo - receitas)</small>
                </label> <!-- Rótulo do campo de entrada "Valor" -->
                <input type="number" id="amount" placeholder="Valor da transação" /> <!-- Campo de entrada para o valor da transação -->
            </div>

            <button class="btn meu-botao ">Adicionar</button> <!-- Botão para adicionar a transação -->
        </form>
    </div>

    <script src="script.js"></script> <!-- Inclui o arquivo de script (script.js) no código -->
    <?php include "../inc/footer.php"; ?> <!-- Inclui o arquivo de rodapé (footer.php) no código -->
