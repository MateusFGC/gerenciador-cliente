<?php

if (!empty($_GET['id'])) {

    include_once('config.php');

    //receber o parametro id
    $id = $_GET['id'];

    //verificação se existe o id no banco de dados
    $sqlSelect = "SELECT * FROM usuario WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0){

        $sqlDelete = "DELETE FROM usuario WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }


} 
if($resultDelete = 1) {
    echo("Removido com sucesso <br>");
    header('Location: ./system.php');

} else {
    echo("Erro ao deletar, tente novamente");
  

}

?>
<html><body>
    <h1>
        <a href="system.php">Voltar</a>
    </h1>
</body></html>