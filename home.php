<?php

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
        <a class="navbar-brand" href="#">Gestão de Eventos</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="py-5 text-center text-white" style="background: linear-gradient(135deg,rgb(66, 96, 193), #6610f2);">
    <div class="container">
        <h1 class="display-4">Bem-vindo ao Sistema de Gestão de Eventos</h1>
        <p class="lead">Gerencie seus eventos de forma simples e rápida com nosso sistema.</p>
        <a href="index.php" class="btn btn-light btn-lg mt-3">Ver Eventos</a>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">O que você pode fazer?</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Eventos</h5>
                        <p class="card-text">Cadastre novos eventos com facilidade, inserindo nome e data.</p>
                        <a href="add.php" class="btn btn-primary">Adicionar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Listar Eventos</h5>
                        <p class="card-text">Veja todos os eventos cadastrados, ordenados pela data.</p>
                        <a href="index.php" class="btn btn-primary">Listar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Editar ou Excluir</h5>
                        <p class="card-text">Atualize ou remova eventos conforme necessário.</p>
                        <a href="index.php" class="btn btn-primary">Gerenciar</a>
                    </div>
                </div>
            </div>
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