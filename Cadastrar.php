<html>
    <head>
        <title> Cadastro do Usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="text-center mb-4">Cadastro do Usuario</h2>
        <form action="conexao.php" method="POST">
            <div class="mb-3">
                <label class="form-label">login</label>
                <input type="text" name="login" class="form-control" placeholder="Digite seu nome" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Digite seu email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
    </div>
</div>
</body>
</html>