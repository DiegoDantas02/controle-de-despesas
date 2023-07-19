<?php
// Arquivo: validar.php
include "../inc/conexao.php";
// Verifica se a requisição foi feita através do método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $username = $_POST['root'];
    $password = $_POST[''];

    // Validações dos campos (você pode adicionar outras validações conforme sua necessidade)
    if (empty($username) || empty($password)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        // Conexão com o banco de dados (substitua 'seu_host', 'seu_usuario', 'sua_senha' e 'seu_banco' pelas informações corretas)
        $conn = new mysqli('seu_host', 'seu_usuario', 'sua_senha', 'seu_banco');

        // Verifica se houve algum erro na conexão
        if ($conn->connect_error) {
            die("Erro de conexão: " . $conn->connect_error);
        }

        // Trata os dados para evitar injeção de SQL
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);

        // Consulta SQL para verificar se o usuário já existe no banco de dados
        $query = "SELECT * FROM nome_da_tabela WHERE username='$username'";
        $result = $conn->query($query);

        // Verifica se ocorreu algum erro na consulta
        if (!$result) {
            die("Erro na consulta: " . $conn->error);
        }

        // Verifica se o usuário já existe no banco de dados
        if ($result->num_rows > 0) {
            echo "Usuário já cadastrado.";
        } else {
            // Se o usuário não existe, insere os dados no banco de dados
            $query = "INSERT INTO nome_da_tabela (username, password) VALUES ('$username', '$password')";
            if ($conn->query($query) === TRUE) {
                echo "Cadastro realizado com sucesso!";
            } else {
                echo "Erro no cadastro: " . $conn->error;
            }
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
    }
}
?>
