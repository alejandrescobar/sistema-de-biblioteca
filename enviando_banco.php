<?php
require_once "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf  = $_POST['cpf'];
$ativo ="nada";
$confirmar_senha = $_POST['confirmar_senha'];

if($senha == $confirmar_senha){

$conexao->query("INSERT INTO usuarios ( email, senha, cpf,ativo) VALUES ( '$email', '$senha', '$cpf','$ativo')");
echo "<script language='javascript'>window.alert('Agora voce ja possui login ');</script>";
echo '<script>window.location=" index.php"</script>';

}
else {
    echo "<script language='javascript'>window.alert('As senhas são diferentes ');</script>";
    echo '<script>window.location=" registre.php"</script>';
}

?>
