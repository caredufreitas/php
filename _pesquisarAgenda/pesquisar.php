<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
</head>
<body>
	
	<div id="interface">
	<h1>Resultado da pesquisa...</h1>
        <?php
        $servidor="localhost";
        $usuario="root";
        $senha="freitas75820631";
        $db_name="AGENDA";
        //conexao a base de dados mysql
        $conn = mysqli_connect($servidor, $usuario, $senha, $db_name);
        
            //mensagem de erro ao não conectar
            if($conn === false){
                die("Erro ao conectar a Base de Dados".mysqli_connect_error());
            }
            
            $pesquisar = $_POST['pesquisar'];
            
            $resultado_agenda = "SELECT * FROM contato WHERE nome LIKE '%$pesquisar%' LIMIT 5";
            $result_query = mysqli_query($conn, $resultado_agenda);
            
            while($rows_agenda = mysqli_fetch_array($result_query)){
                echo "
                    <table>
                        <thead>
                            <tr>
                                <td>Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>Nome&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>Telefone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                             </tr>
                        </thead>  
                    </table>
                    <table>
                        <thead>
                           <td>
                             <td>".$rows_agenda['id']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>".
                             "<td>".$rows_agenda['nome']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>
                             <td>".$rows_agenda['telefone']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>
                             <td>".$rows_agenda['eMail']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>
                           </tr> 
                        </thead>
                    </table><hr>";
            }
            ?>
      
       <header id="button">
       	
       	<a href="index.php"><button type="submit" >VOLTAR</button></a>
       	<a href="https://www.google.com"><button type="submit" >SAIR</button></a>
      
      </header>
      </div>
      <footer id="rodape">
      	<p>®registered-SI</p>
      </footer>
    </body>
</html>