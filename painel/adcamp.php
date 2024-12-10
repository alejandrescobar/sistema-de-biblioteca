<?php
@session_start();
include_once('../conexao.php');

// Verificação de sessão
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: ../index.php");
}
$logado = $_SESSION['email'];

// Função para adicionar um novo usuário
if (isset($_POST['submit'])) {
    $cpf = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confsenha = $_POST['confsenha'];
    $ativo = $_POST['ativo'];

    // Verificar se as senhas coincidem
    if ($senha != $confsenha) {
        echo "<script>alert('As senhas não coincidem.');</script>";
    } else {
        // Hash da senha para segurança
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Inserir no banco de dados
        try {
            $sql = "INSERT INTO usuarios (email, senha, cpf, ativo) VALUES (:email, :senha, :cpf, :ativo)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senhaHash);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':ativo', $ativo);

            if ($stmt->execute()) {
                echo "<script>alert('Usuário adicionado com sucesso.'); window.location.href = 'adcamp.php';</script>";
            } else {
                echo "<script>alert('Erro ao adicionar o usuário.');</script>";
            }
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}

// Consultar usuários existentes
$sql = "SELECT * FROM usuarios ORDER BY id ASC";
$result = $conexao->query($sql);

if ($result) {
    $usuarios = $result->fetchAll(PDO::FETCH_ASSOC);
} else {
    $usuarios = [];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
    <header class="header p-3 d-flex justify-content-between align-items-center bg-secondary shadow">
        <h1 class="text-warning text-center m-0">ADMINISTRAÇÃO</h1>
        <div class="d-flex gap-3 align-items-center">
            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#addUserModal">Novo Usuário</button>
            <a href="../log-out.php" class="btn btn-warning btn-sm">Sair</a>
        </div>
    </header>

    <div class="container my-5">
        <h2 class="text-center mb-4">Usuários Cadastrados</h2>
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ativo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= htmlspecialchars($usuario['id']) ?></td>
                    <td><?= htmlspecialchars($usuario['email']) ?></td>
                    <td><?= htmlspecialchars($usuario['cpf']) ?></td>
                    <td><?= htmlspecialchars($usuario['ativo']) ?></td>
                    <td>
                        <a href="editar.php?id=<?= $usuario['id'] ?>" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i> Editar
                        </a>
                        <a href="excluir.php?id=<?= $usuario['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                            <i class="bi bi-trash"></i> Excluir
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Adicionar Usuário -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Adicionar Novo Usuário</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="adcadm.php" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nomeUsuario" class="form-label">Nome de Usuário</label>
                            <input type="text" class="form-control" id="nomeUsuario" name="usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="emailUsuario" class="form-label">Email</label>
                            <input type="email" class="form-control" id="emailUsuario" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="senhaUsuario" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senhaUsuario" name="senha" required>
                        </div>
                        <div class="mb-3">
                            <label for="confSenhaUsuario" class="form-label">Confirmar Senha</label>
                            <input type="password" class="form-control" id="confSenhaUsuario" name="confsenha" required>
                        </div>
                        <div class="mb-3">
                            <label for="ativoUsuario" class="form-label">Ativo</label>
                            <select class="form-select" id="ativoUsuario" name="ativo" required>
                                <option value="Nao">nao</option>
                                <option value="Sim">sim</option>
                                <option value="comum">nad</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" name="submit" class="btn btn-success">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
