<?php

$hostname = "localhost";
$bancodedados = "banco_teste";
$usuario = "root";
$senha = "123456";

$mysqli = new $mysqli($hostname, $bancodedados, $usuario, $senha);
if ($mysqli->connect_errono) {
    echo "Falha ao conectar: (" . $mysqli->connect_errono . ") " . $mysqli->connect_errono;
} else
    echo "Conectado";
