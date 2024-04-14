<?php
session_start();
/* print_r($_SESSION);
 */
//conexão com o arquivo config, onde fica a conexão
include_once('config.php');

//(se não existir variavel email e for igual a true ) e (se não existir variavel senha e for igual a true )
if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha'])== true)) {

   //destrua qualquer dado que tem na sessão usando o unset
    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    //volta para a pagina login
    header('Location: login.php');
} 
    //var logado recebe o email da _SESSION
    $logado = $_SESSION['email'];

    if (!empty($_GET['search'])) {

        //$data recebe os valores digitados na pesquisa
        $data = $_GET['search'];

        //checa se o id, nome e email digitado existe na variavel $data digitada na pesquisa
        //o % na frente e atras da variavel '%$data%, significa que ele aceita qualquer formato, string, numero ..etc
        $sql = "SELECT * FROM cliente WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";

       
    } else 
    {  //solicitar os registros no banco de dados
        //DESC maior para o menor
        $sql = "SELECT * FROM cliente ORDER BY id DESC";

    } 


    //executar os comandos acima
    $result = $conexao->query($sql);
   /*  print_r($sql);
    print_r('<br>');
  print_r($result); */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Sistema</title>
    <style>
        
    </style>
</head>

<body>
    <?php
    echo "<h1> Seja bem vindo <u>$logado<u></h1>"
   ?>
    <div>
        <a href="closed.php">Sair</a>
        <a href="clientmanager.html">Voltar</a>
        <br><br><br>
    </div>
    <div class="box-search d-flex justify-content-center">
        <input type="search" class="form-control w-32" placeholder="Pesquisar" name="" id="pesquisar" >
        <button onclick="SearchData()" class="btn btn-primary" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
        </button>
    </div>
    <div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data de nacimento</th>
                    <th scope="col">CPF</th>
                    <th scope="col">RG</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Ações</th>

                </tr>


            </thead>
            <tbody>
        <?php
        while($user_data = mysqli_fetch_assoc($result)){
            echo"<tr>";
            echo"<td>".$user_data['id']."</td>";
            echo"<td>".$user_data['nome']."</td>";
            echo"<td>".$user_data['data_nasc']."</td>";
            echo"<td>".$user_data['cpf']."</td>";
            echo"<td>".$user_data['rg']."</td>";
            echo"<td>".$user_data['endereco']."</td>";
            echo"<td>".$user_data['tel']."</td>";
            echo"<td>".$user_data['email']."</td>";
            echo"<td>".$user_data['senha']."</td>";
            echo"<td> 
            <a class='btn btn-success btn-sm' href='form.php'> 
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-circle' viewBox='0 0 16 16'>
  <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16'/>
  <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4'/>
</svg></a>
            <a class='btn btn-primary btn-sm' href='edit.php?id=$user_data[id]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-brush' viewBox='0 0 16 16'>
  <path d='M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.1 6.1 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.1 8.1 0 0 1-3.078.132 4 4 0 0 1-.562-.135 1.4 1.4 0 0 1-.466-.247.7.7 0 0 1-.204-.288.62.62 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896q.19.012.348.048c.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04M4.705 11.912a1.2 1.2 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.4 3.4 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3 3 0 0 0 .126-.75zm1.44.026c.12-.04.277-.1.458-.183a5.1 5.1 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005zm3.582-3.043.002.001h-.002z'/>
</svg></a>
<a class='btn btn-danger btn-sm' href='delete.php?id=$user_data[id] '>
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
</svg>
</a>
            </td>";

            echo"</tr>";

        }
        ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    //Barra de pesquisa
    var search = document.getElementById('pesquisar'); 

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            SearchData();           
        }
    });

    //Função para apresentar a pesquisa na URL
    function SearchData() {
        window.location = 'system.php?search='+ search.value;
     }
</script>


</html>