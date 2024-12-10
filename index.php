<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link do Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #f0f0f0;">








<div class="card" style="width: 24rem;">
    <div class="card-body">
        <h5 class="card-title text-center">Login</h5>

        <form action="acao.php" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="" class="form-control" id="email" name="email" >
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" >
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Entrar" >
            <input type="submit" class="btn btn-primary btn-block" value="cadastrar" name="cadastrar">

            
        </form>
    </div>
</div>

<!-- Link do Bootstrap JS e dependências -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
