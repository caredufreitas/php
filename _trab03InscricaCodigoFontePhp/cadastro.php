<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
		<link rel="stylesheet" type="text/css" href="_css/form.css"/>
		<title>Inscrições</title>
		<style type="text/css">
		  section#interface-cad{
        	background-color: #ffffff;
        	width: 500px;
        	height: 200px;
        	margin: 10px auto 0px auto;
            }
		</style>
	</head>
	<body>
		<div id="navbar">
			<figure class="foto-legenda">
				<img src="_imagem/carlos.png"/>
			</figure>
		</div>
		<section id="interface-cad">
            <?php
                include_once ("conexao.php");
                $eMail = $_POST['tEmail'];    
                //inserindo o contato no sgbd
                $result = "INSERT INTO Contato (eMail) VALUES ('$eMail')";
                $rusult_user = mysqli_query($conn, $result);
              
                   if(mysqli_affected_rows($conn) != 0){
            				echo "
            					
            					<script type=\"text/javascript\">
            						alert(\"Usuario cadastrado com Sucesso.\");
            					</script>
            				";	
            			}else{
            				echo "
            					
            					<script type=\"text/javascript\">
            						alert(\"O Usuario não foi cadastrado com Sucesso.\");
            					</script>
            				";	
            			}
            			echo"<h1>E-Mail:" .$eMail ."</h1>";
            			
            ?>
            <p></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Obrigado por se inscrever em nossa lista, Materemos contato.</p>
        </section>
	</body>
</html>