<?php

    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '12345';
    $dbName = 'gerenciador-cliente';

    $conexao = new mysqli($dbhost,  $dbUsername, $dbPassword, $dbName);

    if ($conexao->connect_errno) {
        echo "erro ";
    } else {
        echo "conexão efetuada com sucesso"
    }
?>