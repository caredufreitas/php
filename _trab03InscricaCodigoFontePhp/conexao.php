<?php 
$serverName = "localhost";
$database = "Cadastro";
$username = "root"; 
$password = "freitas75820631";
//create connection
$conn = mysqli_connect($serverName,$username, $password, $database);
//check connetion
if(!$conn){
    die("Falha na conexão com o Banco de Dados.".mysqli_connect_error());
}

?>