<?php

$hostname = "localhost";
$bancodedados = "banco_teste";
$usuario = "root";
$senha = "123456";

$mysqli = new mysqli ($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . " ) " . $mysqli->connect_errono;
} 