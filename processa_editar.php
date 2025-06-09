<?php
include 'db.php';
$nome = $_POST['nome'];
$data = $_POST['data'];
$query_editar =$conexao->prepare("UPDATE eventos Set nome = :nome, data_evento = :data");
$query_editar->bindParam(':nome', $nome);
$query_editar->bindParam(':data', $data);
if($query_editar->execute()
){ echo "Seu Evento foi Atualizado com Sucesso!";
}else {
     echo "Não foi possível atualizar o evento.";
}

?>