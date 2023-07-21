
<?php
// Arquivo: conexao.php

// Defina suas credenciais do banco de dados aqui
define('DB_HOST', 'localhost'); // Host do banco de dados (por exemplo, 'localhost')
define('DB_USER', 'root'); // Nome de usuário do banco de dados
define('DB_PASS', ''); // Senha do banco de dados
define('DB_NAME', 'projeto_software'); // Nome do banco de dados

// Conecta ao banco de dados
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verifica se houve algum erro na conexão
// if ($conn->connect_error) {
//     die("Erro de conexão: " . $conn->connect_error);
// } else {
//     echo "Conexão bem-sucedida!";
// }
?>