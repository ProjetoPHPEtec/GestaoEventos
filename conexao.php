<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "meu_banco";


$conn = mysqli_connect($servidor, $usuario, $senha, $banco);


if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
echo "Conectado com sucesso!";
?>
