<?php
   
    $servidor="localhost";
    $usuario="root";
    $senha="freitas75820631";
    $dbname="ELEICAO";
    
    //conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    if($conn === false){
        die("ERRO AO LIGAR À BASE DE DADOS. " . mysqli_connect_error());
    }
?>