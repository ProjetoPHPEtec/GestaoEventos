<?php

include 'db.php';

$sql = "SELECT * FROM eventos ORDER BY data_evento ASC";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$eventos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo - Gestão de Eventos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="home.php">Gestão de Eventos</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="py-5 text-center text-white" style="background: linear-gradient(135deg,rgb(66, 96, 193), #6610f2);">
    <div class="container">
        <h1 class="display-4">Listagem dos seus eventos</h1>
        <p class="lead">Gerencie seus eventos de forma simples e rápida com nosso sistema.</p>
        <a href="home.php" class="btn btn-light btn-lg mt-3">Voltar</a>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($eventos as $evento): ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow rounded">
                        <?php if (!empty($evento['imagem']) && file_exists($evento['imagem'])): ?>
                            <img src="<?= htmlspecialchars($evento['imagem']) ?>" 
                                 class="card-img-top" 
                                 alt="Imagem do Evento"
                                 style="height: 220px; object-fit: cover; border-top-left-radius: 0.375rem; border-top-right-radius: 0.375rem;">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/400x220?text=Sem+Imagem" 
                                 class="card-img-top" 
                                 alt="Sem imagem do evento"
                                 style="height: 220px; object-fit: cover; border-top-left-radius: 0.375rem; border-top-right-radius: 0.375rem;">
                        <?php endif; ?>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-3"><?= htmlspecialchars($evento['nome']) ?></h5>
                            <p class="card-text mb-1"><strong>Data:</strong> <?= date('d/m/Y', strtotime($evento['data_evento'])) ?></p>
                            <p class="card-text mb-1"><strong>Local:</strong> <?= htmlspecialchars($evento['local_evento']) ?></p>
                            <p class="card-text mb-3"><strong>Horário:</strong> <?= substr($evento['horario_evento'], 0, 5) ?></p>
                            <a href="editar.php?id=<?= $evento['id'] ?>" class="btn btn-primary mt-auto align-self-start">
                                Editar
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<footer class="py-4 bg-light text-center">
    <div class="container">
        <p class="mb-0">&copy; <?= date('Y') ?> Gestão de Eventos. Todos os direitos reservados.</p>
    </div>
</footer>
</body>
</html>