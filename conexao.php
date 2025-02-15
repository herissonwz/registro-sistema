<?php

define("HOST", "localhost");
define("USERNAME", "root");
define("DATABASE", "registro-sistema");
define("PASSWORD", "");


try {
    $conexao = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);

    if ($conexao->connect_error) {
        die("falha na conexao" . $conexao->connect_error);
    }
    echo ("conectado com sucesso! ");
} catch (Exception $error) {
    echo "Error: {$error->getMessage()}";
}

?>