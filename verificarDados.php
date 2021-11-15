<?php

    $email    = $_REQUEST["txtemail"] ;
    $password = $_REQUEST["txtsenha"] ;


    include "login/banco/conectarBanco.php" ;

    $sql = "SELECT * from login where email='$email' and senha='$password'" ;

    $resultado = mysqli_query( $conexao, $sql ) ;

    $quantidade = mysqli_num_rows($resultado) ;

    if ($quantidade == 0 ) {
        echo "Login/senha incorreto" ;
        echo "<br>" ;
        echo "<a href='entar.html'>Voltar</a>" ;
    }else{
        header("Location: index.html");
    }

?>