<?php
session_start();
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Gostei-NãoGostei</title>
		<!-- estilo.css -->>
		<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	</head>
	<body>
		<header id="cabecalho">
			
		</header>
		<section id="corpo">
			<h1>Curso Superior</h1>
			<img id="icone" src="_imagens/si-500px.png"/>
		</section>
		<aside id="lateral">
			<?php 
			     //pesquisar tabela
			     $res_tab = "SELECT * FROM voto";
			     $resultado = mysqli_query($conn, $res_tab);
			     
			     //enquanto a tupla da tabela for afetada
			     while($row_tupla = mysqli_fetch_assoc($resultado)){
			         //mensagem
			         if(isset($_SESSION['msg'])){
			             echo $_SESSION['msg']."<br><br>";
			             unset($_SESSION['msg']);
			         }
			 ?>
				<img src="_imagens/<?php echo $row_tupla['imagem']; ?>" width="100" height="100"/><br><br>
				<?php 
			         echo "TOTAL: ". $row_tupla['totVoto']. "<br>";
			         echo "<a href='votar.php?id=".$row_tupla['id']."'><span style='color: green'><h3>VOTAR</h3></span></a><hr>";
			     }
			     ?>
			<a href="https://www.google.com"><button type="submit" >SAIR</button></a>
		</aside>
		<footer id="rodape">
			<p>®registered-C@rlo§Freit@§</p>
		</footer>
	</body>
</html>