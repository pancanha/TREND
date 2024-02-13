<?php
function validarSenha($senha, $nome, $sobrenome, $cpf) {
    // Verificar se a senha contém pelo menos uma letra maiúscula e um número
    if (!preg_match('/[A-Z]/', $senha) || !preg_match('/[0-9]/', $senha)) {
        return false;
    }

    // Verificar se a senha contém o nome, sobrenome ou CPF
    if (strpos(strtolower($senha), strtolower($nome)) !== false ||
        strpos(strtolower($senha), strtolower($sobrenome)) !== false ||
        strpos($senha, $cpf) !== false) {
        return false;
    }

    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    // Validar a senha
    if (validarSenha($senha, $nome, $sobrenome, $cpf)) {
        // Senha válida, proceder com o cadastro
        // Insira os dados no banco de dados aqui
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "A senha não atende aos critérios de segurança.";
    }
}
?>