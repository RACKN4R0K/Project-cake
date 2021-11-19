<?php

    $codigo = $_REQUEST["codigo"] ;

    include "banco/conectarBanco.php";
    
    $sql = "DELETE from login where codigo=$codigo";

    $resultado = mysqli_query( $conexao, $sql ) ;

    header("Location: consultarDados.php");

?>