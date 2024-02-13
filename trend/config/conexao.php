<?php
// Conectar ao banco de dados (substitua essas informações pelas suas)
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "banco_teste";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}