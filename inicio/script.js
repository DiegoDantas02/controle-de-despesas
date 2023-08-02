const transactionsUl = document.querySelector('#transactions'); // Seleciona a lista de transações na página
const incomeDisplay = document.querySelector('#money-plus'); // Seleciona o elemento que mostra o total de receitas na página
const expenseDisplay = document.querySelector('#money-minus'); // Seleciona o elemento que mostra o total de despesas na página
const balanceDisplay = document.querySelector('#balance'); // Seleciona o elemento que mostra o saldo atual na página
const form = document.querySelector('#form'); // Seleciona o formulário de adicionar transações na página
const inputTransactionName = document.querySelector('#text'); // Seleciona o campo de entrada para o nome da transação no formulário
const inputTransactionAmount = document.querySelector('#amount'); // Seleciona o campo de entrada para o valor da transação no formulário

let transactions = []; // Variável para armazenar as transações

const fetchTransactions = () => { // Função para buscar as transações do armazenamento local (localStorage)
  const localStorageTransactions = JSON.parse(localStorage.getItem('transactions'));
  transactions = localStorageTransactions || []; // Carrega as transações do localStorage ou inicializa como um array vazio
};

const saveTransactionsToLocalStorage = () => { // Função para salvar as transações no armazenamento local (localStorage)
  localStorage.setItem('transactions', JSON.stringify(transactions));
};

const removeTransaction = (id) => { // Função para remover uma transação pelo seu ID
  transactions = transactions.filter(transaction => transaction.id !== id); // Filtra as transações, mantendo apenas as que não correspondem ao ID removido
  init(); // Atualiza a exibição das transações
  saveTransactionsToLocalStorage(); // Salva as alterações no localStorage
};

const addTransactionIntoDOM = (transaction) => { // Função para adicionar uma transação na lista exibida na página
  const operator = transaction.amount < 0 ? '-' : '+'; // Verifica se a transação é uma despesa (negativa) ou receita (positiva)
  const CSSClass = transaction.amount < 0 ? 'minus' : 'plus'; // Define a classe CSS a ser aplicada para estilização com base no tipo da transação
  const amountWithoutOperator = Math.abs(transaction.amount); // Obtém o valor absoluto do valor da transação (sem o sinal)
  const li = document.createElement('li'); // Cria um elemento de lista para exibir a transação

  li.classList.add(CSSClass); // Adiciona a classe CSS para estilização do tipo da transação
  li.innerHTML = `
    ${transaction.name} <span>${operator} R$ ${amountWithoutOperator}</span><button class="delete-btn" onClick="removeTransaction(${transaction.id})">x</button>
  `; // Define o conteúdo HTML da transação a ser exibida

  transactionsUl.appendChild(li); // Adiciona o elemento da transação na lista de transações
};

const updateBalanceValues = () => { // Função para atualizar os valores de saldo, receitas e despesas exibidos na página
  const transactionAmounts = transactions.map(transaction => transaction.amount); // Cria um array com os valores das transações
  const total = transactionAmounts.reduce((accumulator, transaction) => accumulator + transaction, 0).toFixed(2); // Calcula o saldo total (receitas - despesas)
  const income = transactionAmounts.filter(value => value > 0).reduce((accumulator, value) => accumulator + value, 0).toFixed(2); // Calcula o total de receitas
  const expense = Math.abs(transactionAmounts.filter(value => value < 0).reduce((accumulator, value) => accumulator + value, 0)).toFixed(2); // Calcula o total de despesas (valor absoluto)

  balanceDisplay.textContent = `R$ ${total}`; // Atualiza o elemento que mostra o saldo total
  incomeDisplay.textContent = `R$ ${income}`; // Atualiza o elemento que mostra o total de receitas
  expenseDisplay.textContent = `R$ ${expense}`; // Atualiza o elemento que mostra o total de despesas
};

const init = () => { // Função para inicializar a página com as transações e valores atualizados
  transactionsUl.innerHTML = ''; // Limpa a lista de transações na página
  transactions.forEach(addTransactionIntoDOM); // Adiciona cada transação na lista de transações na página
  updateBalanceValues(); // Atualiza os valores de saldo, receitas e despesas exibidos na página
};

const generateID = () => Math.round(Math.random() * 1000); // Função para gerar um ID aleatório para as transações

const handleFormSubmit = (event) => { // Função para lidar com o envio do formulário de adição de transações
  event.preventDefault(); // Impede o comportamento padrão do formulário

  const transactionName = inputTransactionName.value.trim(); // Obtém o valor do campo de entrada para o nome da transação
  const transactionAmount = inputTransactionAmount.value.trim(); // Obtém o valor do campo de entrada para o valor da transação

  if (transactionName === '' || transactionAmount === '') { // Verifica se o nome ou o valor da transação estão vazios
    alert('Por favor, preencha tanto o nome quanto o valor da transação.'); // Exibe um alerta se algum campo estiver vazio
    return;
  }

  const transaction = { // Cria um objeto para representar a nova transação
    id: generateID(), // Gera um ID aleatório para a transação
    name: transactionName, // Define o nome da transação
    amount: Number(transactionAmount) // Converte o valor da transação para número
  };

  transactions.push(transaction); // Adiciona a nova transação ao array de transações
  init(); // Atualiza a exibição das transações na página
  saveTransactionsToLocalStorage(); // Salva as transações atualizadas no localStorage

  inputTransactionName.value = ''; // Limpa o campo de entrada para o nome da transação após a adição
  inputTransactionAmount.value = ''; // Limpa o campo de entrada para o valor da transação após a adição
};

form.addEventListener('submit', handleFormSubmit); // Adiciona um ouvinte de evento para o envio do formulário

fetchTransactions(); // Busca as transações do localStorage ao carregar a página
init(); // Inicializa a página com as transações e valores atualizados
