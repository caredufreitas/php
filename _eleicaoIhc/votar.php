<?php
session_start();
include_once 'conexao.php';

//verificar valor por URL
if(isset($_GET['id'])){
//cookie para contagem de votação   
    if($_COOKIE['voto_cont']){
        $_SESSION['msg'] = "<span style='color: red'>Você já votou!</span>";
        header("Location: index.php");
    }else{
        setcookie('voto_cont', $_SERVER['REMOTE_ADDR'], time() + 5);
        $res_tab = "UPDATE voto SET totVoto=totVoto + 1
		WHERE id ='".$_GET['id']."'";
        $resultado = mysqli_query($conn, $res_tab);
        
        //linha afetada
        if(mysqli_affected_rows($conn)){
            $_SESSION['msg'] = "<span style='color: green'>Voto recebido com sucesso!</span>";
            header("Location: index.php");
        }else{
            $_SESSION['msg'] = "<span style='color: red'>Erro ao votar!</span>";
            header("Location: index.php");
        }
       
    }
    
}