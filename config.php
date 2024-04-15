<?php

//conexão com o banco de dados
    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'mysql';

    $conexao = new mysqli($dbhost,  $dbUsername, $dbPassword, $dbName);

  /*   if ($conexao->connect_errno) {
        echo "erro ";
    } else {
        echo "conexão efetuada com sucesso";
    } */
?>