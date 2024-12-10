<?php
session_start(); // Inicie a sessão

if (isset($_SESSION['email'])) {
    session_destroy();
    header("Location: index.php"); // Corrija a redireção
    exit(); // Sempre use exit após header
}
?>
