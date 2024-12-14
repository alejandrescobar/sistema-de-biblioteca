<?php
@session_start();
require_once("conexao.php");
 $email = $_POST['email'];
 
 $senha = $_POST['senha'];

 if (isset($_POST['cadastrar'])){
    echo '<script>window.location="registre.php"</script>';

 }
//$senha_crip = md5($senha);

$query = $conexao->prepare("SELECT * from usuarios where email = :email and senha = :senha");
$query->bindValue(":email", "$email");
$query->bindValue(":senha", "$senha");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($res);



if($linhas > 0){
    $_SESSION['email'] = $res[0]['email'];
    $_SESSION['id'] = $res[0]['id'];
    $_SESSION['ativo'] = $res[0]['ativo'];
    
    if($res[0]['ativo'] == 'sim'){
        echo '<script>window.location=" painel/index.php"</script>';
      
    }
    if($res[0]['ativo'] == 'Sim'){
        echo '<script>window.location=" painel/index.php"</script>';
      
    }



if($res[0]['ativo'] == 'nao'){

    echo "<script language='javascript'>window.alert('voce foi desativado , entre em contato com o Administrador');</script>";
    echo '<script>window.location="index.php"</script>';

   


}
if($res[0]['ativo'] == 'nad'){
    echo '<script>window.location=" interface.php"</script>';
  
}




}
else {
    
    echo '<script>window.location=" registre.php"</script>';
}
?>