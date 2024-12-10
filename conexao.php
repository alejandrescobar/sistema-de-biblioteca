<?php
// Configuração de conexão ao banco de dados
$servidor = 'localhost';
$banco ='biblioteca';
$usuario = 'root';
$senha = '';


try {
    $conexao = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
} catch (Exception $e) {
    echo 'Erro ao conectar no banco de dados: <br>';
    echo $e;
    exit; // Encerra o script em caso de erro
    
}


?>
