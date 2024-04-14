<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela login</title>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testlogin.php" method="POST">

            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <!-- Direciona para testlogin -->
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
        <a href="form.php">Cadastre aqui</a>
    </div>
</body>
</html>