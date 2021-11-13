<?php

    $id = $_REQUEST["id"] ;

    include "banco/conectarBanco.php";
    
    $sql = "DELETE from cake where id=$id";

    $resultado = mysqli_query( $conexao, $sql ) ;

    header('Location: consultar_card.php');

?>