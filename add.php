<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
    <h1>Adicionar Evento</h1>
    <form method="post">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Data</label>
            <input type="date" name="data_evento" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="listagem.php" class="btn btn-secondary">Voltar</a>
    </form>
</body>
</html>