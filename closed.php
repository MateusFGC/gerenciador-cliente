<?php
//encerra a sessão
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
//volta para a pagina login
header('Location: login.php');
?>