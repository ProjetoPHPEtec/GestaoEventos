<?php
include 'db.php';
$nome = $_POST['nome'];
$data = $_POST['data'];
$id = $_POST['id']; 

$query_editar = $conexao->prepare("UPDATE eventos SET nome = :nome, data_evento = :data WHERE id = :id");
$query_editar->bindParam(':nome', $nome);
$query_editar->bindParam(':data', $data);
$query_editar->bindParam(':id', $id);

if ($query_editar->execute()) {
    echo "Seu Evento foi Atualizado com Sucesso!";
    header("Location: listagem.php");
    exit();
} else {
    echo "Não foi possível atualizar o evento.";
}
?>