<?php
$dsn = "mysql:host=127.0.0.1;dbname=gestao_de_eventos;charset=utf8mb4";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

$conexao = new PDO($dsn , $username, $password);

try {
    $conexao = new PDO($dsn, $username, $password);
} catch (Exeception $e) {
    echo "Erro de conexão";
}

$login = $_POST['login'];
$email = $_POST['email'];   
$senha = $_POST['senha'];
if (isset($login) && isset($email) && isset($senha)) {
    $stmt = $conexao->prepare("INSERT INTO usuarios (login, email, senha) VALUES (:login, :email, :senha)");
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha',($senha));
    
    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário.";
    }
} else {
    echo "Preencha todos os campos.";
}
?>
