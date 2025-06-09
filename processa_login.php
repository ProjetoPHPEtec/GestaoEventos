<?php
session_start();
include 'conexao.php'; // Arquivo que faz a conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    // Consulta SQL para verificar usuário
    $sql = "SELECT id, senha FROM usuarios WHERE email = :email";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        // Verifica se a senha está correta
       if ($senha === $usuario['senha']) {
         $_SESSION['usuario'] = $usuario['id'];
            header("Location: home.php"); // Redireciona para a página de acesso
            exit();
        } else {
            echo "<script>alert('Senha incorreta!'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Email não encontrado!'); window.location.href='login.php';</script>";
    }
}
?>