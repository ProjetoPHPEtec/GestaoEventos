
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="text-center mb-4">Login Cadastro</h2>
        <form action="processa_login.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Digite seu email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Entrar</button>
        </form>
        <div class="text-center mt-3">
            <a href="cadastro.php" class="text-decoration-none">Ainda não tem conta? Cadastre-se</a>
        </div>
    </div>
</div>
</body>
</html>
