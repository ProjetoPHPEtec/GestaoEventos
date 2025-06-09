<?php
include 'db.php';

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
