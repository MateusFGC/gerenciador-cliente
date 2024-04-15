<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela login</title>
    <style>
        body{
            display: flex;
    gap: 1rem;
    align-items: center;
    justify-content: center;
        }
    </style>
</head>

<body>
    <div class="box">
        <h1>Login</h1>
        <form action="testlogin.php" method="POST">
            <fieldset>
                <div class="inputBox">
                    <input type="text" name="email" >
                    <labelclass="labelInput">Email </label>
                </div>
                
                <div class="inputBox">
                    <input type="password" name="senha" >
                    <label class="labelInput">Senha</label>
                </div>
                
                <div class="inputBox">
                    <!-- Direciona para testlogin -->
                    <input class="btn-submit" type="submit" name="submit" value="Enviar">
                     <!--  Direciona para o testlogin.php -->

                </div>
            </fieldset>
        </form>
<!--         <a href="form.php">Cadastre aqui</a>
    </div>
</body>

</html>