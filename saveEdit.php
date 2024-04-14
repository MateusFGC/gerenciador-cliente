<?php
include_once('config.php');

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $tel = $_POST['tel'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sqlUpdate = "UPDATE cliente SET nome='$nome',data_nasc='$data_nasc',cpf='$cpf',rg='$rg',tel='$tel',endereco='$endereco',email='$email',senha='$senha' WHERE id='$id'";

    $result - $conexao->query($sqlUpdate);

  

}
header('Location: system.php');
?>