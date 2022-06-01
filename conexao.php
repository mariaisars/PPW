<?php
    $servidor = "localhost";
    $bdname = "cadastro";
    $usuario = "root";
    $senha = "";

    $conexao = mysqli_connect($servidor, $bdname, $usuario, $senha,);
    
    if(!$conexao)
        die("problemas com a conexão ao banco de dados, descrição do problema:" . 
        mysqli_connect_error());

    echo "testconexão realizada com sucesso";

?>
