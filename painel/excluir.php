<?php
if (!empty($_GET['id'])) {
    include_once('../conexao.php');
    
    // Obtém o ID da URL
    $id = $_GET['id'];
    
    // Consulta para verificar se o usuário existe
    $sqlSelect = "SELECT * FROM usuarios WHERE id = :id";
    
    // Prepara a consulta
    $stmt = $conexao->prepare($sqlSelect);
    
    // Vincula o parâmetro para o ID
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    // Executa a consulta
    $stmt->execute();
    
    // Verifica se há resultados
    if ($stmt->rowCount() > 0) {
        // Caso o usuário exista, exclui o registro
        $sqlDelete = "DELETE FROM usuarios WHERE id = :id";
        
        // Prepara a consulta de exclusão
        $stmtDelete = $conexao->prepare($sqlDelete);
        
        // Vincula o parâmetro para o ID
        $stmtDelete->bindParam(':id', $id, PDO::PARAM_INT);
        
        // Executa a consulta de exclusão
        $resultDelete = $stmtDelete->execute();
        
        // Verifica se a exclusão foi bem-sucedida
        if ($resultDelete) {
            echo "<script>alert('Usuário deletado com sucesso.'); window.location.href = 'index.php';</script>";
        } else {
            echo "Erro ao deletar o usuário.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
}
?>
