<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

echo "Bem-vindo, " . $_SESSION['usuario'];
?>