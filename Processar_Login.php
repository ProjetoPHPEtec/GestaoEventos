<?php
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($senha, $user['senha'])) {
    session_start();
    $_SESSION['usuario'] = $user['nome'];
    echo "Login realizado com sucesso!";
} else {
    echo "Email ou senha incorretos!";
}
?>  