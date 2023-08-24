<?php
$servidor="localhost";
$usuario="root";
$senha="freitas75820631";
$db_name="ELEICAO";
//conexao a base de dados mysql
$conn = mysqli_connect($servidor, $usuario, $senha, $db_name);

//mensagem de erro ao não conectar
if($conn === false){
    die("Erro ao conectar a Base de Dados".mysqli_connect_error());
}
