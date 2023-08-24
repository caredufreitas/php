<?php
session_start();
include_once("conexao.php");

                                                                                
if(isset($_GET['id'])){                                                                              
   
    if($_COOKIE['voto_cont']){
    
        $_SESSION['msg'] = "<span style='color: green'>VOCÊ JÁ VOTOU!</span>";
       
        header("Location: index.php");  
    }else{            
        
        setcookie('voto_cont', $_SERVER['REMOTE_ADDR'], time() + 5);                                                                  
        
        $result_cand = "UPDATE CANDIDATO SET qtd_voto = qtd_voto + 1
        WHERE id='". $_GET['id']. "'";
        
        mysqli_query($conn, $result_cand);
                                                                     
        if(mysqli_affect_rows($conn)){            
        
            $_SESSION['msg'] = "<span style='color: green'>VOTO recebido com SUCESSO!</span>";
            
            header("Location: index.php");    
        
            
        }else{
            
            $_SESSION['msg'] = "<span style='color: red'>Erro ao VOTAR!</span>";
            
            header("Location: index.php");
        }
    }
}

?>