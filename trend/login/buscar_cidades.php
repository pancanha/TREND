<?php
include_once("../config/conexao.php");

// Verificar se o estado foi enviado via POST
if (isset($_POST['estado'])) {
    $estado = $_POST['estado'];

    // Consulta SQL para buscar cidades correspondentes ao estado
    $sql = "SELECT cidade FROM cidades WHERE estado = '$estado'";
    $result = $conn->query($sql);

    $cidades = array();

    if ($result->num_rows > 0) {
        // Adicionar as cidades ao array
        while ($row = $result->fetch_assoc()) {
            $cidades[] = $row['cidade'];
        }
    }

    // Converter o array de cidades para JSON
    echo json_encode($cidades);
} else {
    // Se o estado não foi enviado, retornar uma mensagem de erro
    echo "Estado não especificado";
}

// Fechar conexão
$conn->close();
