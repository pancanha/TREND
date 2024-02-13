<?php
// Conectar ao banco de dados (substitua essas informações pelas suas)
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "Banco_teste";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Receber dados do formulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
function verificarSenha($senha) {
    // Padrão da expressão regular para verificar a senha
    $padrao = '/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    
    // Verifica se a senha corresponde ao padrão
    if (preg_match($padrao, $senha)) {
        return true; // Senha válida
    } else {
        return false; // Senha inválida
    }
}

// Testando a função com uma senha
$senha = "Senha1@";
if (verificarSenha($senha)) {
    echo "Senha válida!";
} else {
    echo "Senha inválida!";
}


// Inserir dados no banco de dados
$sql = "INSERT INTO usuarios (nome, cpf, login, senha, email, telefone, estado, cidade)
        VALUES ('$nome','$cpf','$login', '$senha', '$email', '$telefone', '$estado', '$cidade')";

if ($conn->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar usuário: " . $conn->error;
}

$conn->close();
?>
