<?php 
session_start();

//teste de login para saber se esta logado no BD ainda
if(isset($_POST['submit']) && !empty($_POST['email'] && !empty($_POST['senha']))) {
// acessa a pagina
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

 /*    print_r('email:' . $email);
    print_r('senha:' . $senha); */

//verificação no bando de dados se existem os dados
    $sql = "SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'";

    //execultar a consulta no banco de dados

    $result = $conexao->query($sql);

/* Para teste se existe no banco de dados   [num_rows] => 0 ou 1 verificar quatas linha existe com esse senha e email
 print_r($result);
print_r('<br>');
print_r($sql); */


// se o nª de linhas no result(mysql) for menor que 1, não existe
if(mysqli_num_rows($result) < 1) {
    //unset, "destroi" os dados
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    $_SESSION['senha'] = $senha;
    //Se não existir os dados, volta para tela de login
    header('Location: login.html');

} else {

    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    //se existir os dados
    header('Location: system.php');

}
}
?>