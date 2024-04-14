<?php
    //aciona o submit
if (isset($_POST['submit'])) {

//conexão
    include_once('config.php');

//passar os input para as váriaveis
 
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $tel = $_POST['tel'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

//consulta no banco de dados

    $result = mysqli_query($conexao, "INSERT INTO cliente(nome,data_nasc,cpf,rg,tel,endereco,email,senha) VALUES('$nome','$data_nasc','$cpf','$rg','$tel','$endereco','$email','$senha')");
    
    header('Location: system.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="box">
        <form action="form.php" method="POST">
        <div class="">
                <input type="text" name="email" id="email" required>
                <label for="nome">Digite seu email de cadastro</label>
            </div>
            <div class="">
                <input type="text" name="senha" id="senha" required>
                <label for="nome">Digite sua nova senha</label>
            </div>
            <div class="">
                <input type="text" name="nome" id="nome" required>
                <label for="nome">Nome completo</label>
            </div>
            <div class="">
                <input type="date" name="data_nasc" id="data_nasc" required>
                <label for="data_nasc">Data de nacimento</label>
            </div>
            <div class="">
                <input type="text" name="cpf" id="cpf" required>
                <label for="cpf">CPF</label>
            </div>
            <div class="">
                <input type="text" name="rg" id="rg" required>
                <label for="rg">RG</label>
            </div>
            <div class="">
                <input type="tel" name="tel" id="tel" placeholder="(xx) xxxxx-xxxx" required>
                <label for="tel">Telefone</label>
            </div>
            <div class="">
                <input type="text" name="endereco" id="endereco" required>
                <label for="endereco">Endereço</label>
            </div>
            
                <input type="submit" name="submit" value="Enviar">
            
        </form>
        <a href="login.php">Login</a>
    </div>
</body>
</html>