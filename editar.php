<?php
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Editar Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h1>Editar Evento</h1>

    <form action="processa_editar.php" method="post">
        <input type="hidden" name="id" value="<?= $evento['id'] ?>">

        <div class="mb-3">
            <label class="form-label">Nome do Evento:</label>
            <input type="text" name="nome" value="<?= htmlspecialchars($evento['nome']) ?>" class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Data do Evento:</label>
            <input type="date" name="data" value="<?= $evento['data'] ?>" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar Alterações
        </button>
        <a href="listagem.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>

</html>