<?php

$dsn = 'mysql:host=127.0.0.1;dbname=gestao_de_eventos;host=localhost';
$user = 'root';
$password = '';

try {
    $conexao = new PDO($dsn, $user, $password);
} catch (Exeception $e) {
    echo "Erro de conexão". $e->getMessage();
    exit;
}



?>