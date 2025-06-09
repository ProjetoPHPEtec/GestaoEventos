<?php

include 'add.php';
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $data_evento = $_POST['data_evento'];
    $local_evento = $_POST['local_evento'];
    $horario_evento = $_POST['horario_evento'];

    $imagem_nome = $_FILES['image']['name'];
    $imagem_tmp = $_FILES['image']['tmp_name'];
    $imagem_destino = 'uploads/' . basename($imagem_nome);

    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }

    if (move_uploaded_file($imagem_tmp, $imagem_destino)) {
        $sql = "INSERT INTO eventos (nome, data_evento, local_evento, horario_evento, imagem) 
                VALUES (:nome, :data_evento, :local_evento, :horario_evento, :imagem)";
        $stmt = $conexao2->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':data_evento', $data_evento);
        $stmt->bindParam(':local_evento', $local_evento);
        $stmt->bindParam(':horario_evento', $horario_evento);
        $stmt->bindParam(':imagem', $imagem_destino);

        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Evento cadastrado com sucesso!</div>";
        } else {
            echo "<div class='alert alert-danger'>Erro ao cadastrar evento.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Erro ao enviar imagem.</div>";
    }
}


?>