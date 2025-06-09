<!DOCTYPE html>
<html>

<head>
    <title>Adicionar Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="home.php">Gestão de Eventos</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="listagem.php">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Sair</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary" href="cadastrar.php">Login</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="py-5 text-center text-white" style="background: linear-gradient(135deg,rgb(66, 96, 193), #6610f2);">
        <div class="container">
            <h1 class="display-4"> Sistema de Gestão de Eventos</h1>
            <a href="home.php" class="btn btn-light btn-lg mt-3">Voltar</a>
        </div>
    </section>

    <div class="container-md">
        <h1>Adicionar Evento</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Data</label>
            <input type="date" name="data_evento" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Local</label>
            <input type="text" name="local_evento" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Horário</label>
            <input type="time" name="horario_evento" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Foto do Evento</label>
    <input type="file" name="image" id="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="listagem.php" class="btn btn-secondary">Voltar</a>
        </div>
    </form>
</body>

</html>