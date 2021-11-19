<?php

    //Cria as variaveis com as informações digitadas pelo usuario
    $nome  = $_REQUEST["txtnome"]  ;
    $validade = $_REQUEST["txtvalidade"] ;
    $cvv = $_REQUEST["txtcvv"] ;
    $numero_card = $_REQUEST["txtnumero"];

    include "php/compras/banco/conectarBanco.php";

    $sql = "INSERT INTO cake (nome,validade,cvv,numero_card) values('$nome','$validade','$cvv','$numero_card')" ;     

    // $resultado = mysqli_query( $conexao, $sql ) ;

    if (mysqli_query( $conexao, $sql ) ) {
        header ('location: conclusaoPagamento.html');  
    }
    else {
        echo "Erro ao gravar" ;
    }


?>