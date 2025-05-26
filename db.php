<?php

$dsn = 'mysql: dbname=GestaoEventos; host=localhost';
$user = 'root';
$pasword = 'root';

$conexao = new PDO($dsn, $user, $password);

try {
    $conexao = new PDO($dsn, $user, $password);
} catch (Exeception $e) {
    echo "Erro de conexão";
}

?>