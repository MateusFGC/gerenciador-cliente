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

    $result = mysqli_query($conexao, "INSERT INTO usuario(nome,data_nasc,cpf,rg,tel,endereco,email,senha) VALUES('$nome','$data_nasc','$cpf','$rg','$tel','$endereco','$email','$senha')");
    header('Location: login.php');
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
    <style>
        body {
            display: flex;
            gap: 1rem;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="form.php" method="POST">

            <fieldset>
                <legend><b>Adicionar um Cliente</b></legend>

                <div class="inputBox">
                    <input type="text" name="email" id="email" required>
                    <label for="nome">Digite seu email </label>
                </div>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" required>
                    <label for="nome">Digite sua senha</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" required>
                    <label for="nome">Nome completo</label>
                </div>
                <div class="inputBox">
                    <input type="date" name="data_nasc" id="data_nasc" required>
                    <label for="data_nasc">Data de nacimento</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" required>
                    <label for="cpf">CPF</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="rg" id="rg" required>
                    <label for="rg">RG</label>
                </div>
                <div class="inputBox">
                    <input type="tel" name="tel" id="tel" placeholder="(xx) xxxxx-xxxx" required>
                    <label for="tel">Telefone</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" required>
                    <label for="endereco">Endereço</label>
                </div>

                <input type="submit" name="submit" class="btn-submit" value="Enviar">

        </form>
        <a href="login.php">Voltar</a>
    </div>
</body>

</html>