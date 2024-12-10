<?php
@session_start();
include_once('../conexao.php');

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: ../login.php");
    exit;
}
$logado = $_SESSION['email'];

// Verificar se o ID foi passado pela URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buscar as informações do usuário no banco de dados
    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Verificar se o usuário foi encontrado
    if ($stmt->rowCount() > 0) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "Usuário não encontrado!";
        exit;
    }
} else {
    echo "ID não especificado!";
    exit;
}

// Atualizar as informações do usuário
if (isset($_POST['submit'])) {
    $cpf = $_POST['cpf'];  // Alterado para CPF, pois agora o campo é "cpf"
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $ativo = $_POST['ativo'];

    // Se a senha foi alterada, atualizar a senha no banco
    if (!empty($senha)) {
        // REMOVI o password_hash() aqui para não criptografar a senha
        $sql = "UPDATE usuarios SET cpf = :cpf, email = :email, senha = :senha, ativo = :ativo WHERE id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':senha', $senha);  // Vincula a senha diretamente
    } else {
        $sql = "UPDATE usuarios SET cpf = :cpf, email = :email, ativo = :ativo WHERE id = :id";
        $stmt = $conexao->prepare($sql);
    }

    $stmt->bindParam(':cpf', $cpf);  // Alterado para CPF corretamente
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':ativo', $ativo);
    $stmt->bindParam(':id', $id);
    $stmt->execute();  // Apenas uma execução do execute()

    if ($stmt->rowCount() > 0) {
        header("Location: index.php"); // Redireciona para o painel de administração
        exit;
    } else {
        echo "Erro ao atualizar os dados!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container my-5">
    <h2 class="text-center mb-4">Editar Usuário</h2>
    <form action="editar.php?id=<?= $usuario['id'] ?>" method="POST">
        <div class="mb-3">
            <label for="cpfUsuario" class="form-label">CPF</label>
            <!-- Alterado o nome do id para cpfUsuario -->
            <input type="text" class="form-control" id="cpfUsuario" name="cpf" value="<?= htmlspecialchars($usuario['cpf']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="emailUsuario" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailUsuario" name="email" value="<?= htmlspecialchars($usuario['email']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="senhaUsuario" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senhaUsuario" name="senha">
            <small class="form-text text-muted">Deixe em branco para não alterar a senha</small>
        </div>
        <div class="mb-3">
            <label for="ativoUsuario" class="form-label">Ativo</label>
            <select class="form-select" id="ativoUsuario" name="ativo" required>
                <option value="Sim" <?= $usuario['ativo'] == 'Sim' ? 'selected' : '' ?>>Sim</option>
                <option value="nad" <?= $usuario['ativo'] == 'nad' ? 'selected' : '' ?>>nad</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Atualizar</button>
        <a href="painel.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
