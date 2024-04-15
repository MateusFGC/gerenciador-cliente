<?php
if (!empty($_GET['id'])) {

    include_once('config.php');

    //receber o parametro id
    $id = $_GET['id'];

    //selecione no bc onde o id seja exatamente igual a variavel id
    $sqlSelect = "SELECT * FROM usuario WHERE id=$id";

    $result = $conexao->query($sqlSelect);
    

    if($result->num_rows > 0){
        //mysqli_fetch_assoc >  recuperar uma única linha de dados de um conjunto de resultados de consulta e convertê-la em um array associativo
        while($user_data = mysqli_fetch_assoc($result)) {
            $id = $user_data['id'];
            $nome = $user_data['nome'];
            $data_nasc = $user_data['data_nasc'];
            $cpf = $user_data['cpf'];
            $rg = $user_data['rg'];
            $tel = $user_data['tel'];
            $endereco = $user_data['endereco'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];

            
    }
    } else {
        header('Location: system.php');
    }

} else {
    header('Location: system.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .box {
            width: 530px;
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>

                <div class="inputBox">
                    <input type="text" name="email" id="email" value="<?php echo $email ?>" required>
                    <label class="labelInput" for="nome">Digite seu email de cadastro</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" value="<?php echo $senha ?>" required>
                    <label class="labelInput" for="nome">Digite sua nova senha</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" required>
                    <label class="labelInput" for="nome">Nome completo</label>
                </div>
                <div class="inputBox">
                    <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $data_nasc ?>" required>
                    <label class="labelInput" for="data_nasc">Data de nacimento</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" value="<?php echo $cpf ?>" required>
                    <label class="labelInput" for="cpf">CPF</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="rg" id="rg" value="<?php echo $rg ?>" required>
                    <label class="labelInput" for="rg">RG</label>
                </div>
                <div class="inputBox">
                    <input type="tel" name="tel" id="tel" placeholder="(xx) xxxxx-xxxx" value="<?php echo $tel ?>"
                        required>
                    <label class="labelInput" for="tel">Telefone</label>
                </div>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" value="<?php echo $endereco ?>" required>
                    <label class="labelInput" for="endereco">Endereço</label>
                </div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input class="btn-submit" type="submit" name="update" id="uptade" value="Update">
                <!-- updade direciona para saveEdit.php -->
            </fieldset>
        </form>
        <a href="system.php">Voltar</a>
    </div>
</body>

</html>