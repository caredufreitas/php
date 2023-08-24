<?php 
    session_start();
    include_once ("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>FAMA-Eleições-2019</title>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <link rel="stylesheet" type="text/css" href="_css/fotos.css"/>
       
</head>

<body>
	<div id="interface">
        	<header id="cabecalho">
                    <h1 id="topo">Os líderes da sala mais prováveis de Sistemas de informação.</h1>
                    <h2>O Futuro Líder da sala.</h2>
                    <nav id="menu">
			<ul>
                            <li><a href="#candidatos">Candidatos</a></li>
                            <li><a href="#votar">Votar</a></li>
                            <li><a href="#faleConosco">Fale Conosco</a></li>
			</ul>
                    </nav>
		</header>
            
            <section id="corpo">
                <hgroup id="caminho">
                    <h3>Eleições 2019 > PÁGINA INICIAL.</h3>
                    <h3>Como funciona > VÍDEO</h3>
                    <h3>Informação dos Candidatos > ARTIGO</h3>
                    <h3>Votação > RESULTADO</h3>
                    <h4>atualizado em 09 de março de 2019</h4>
                </hgroup>
                
               
                <div id="video">
                    <video id="filme" controls="controls" poster="_imagens/capa.png">
                       <source src="_media/eleicoes.mp4" type="video/mp4"/> 
                        Desculpe más não posso carregar o arquivo.
                    </video>
                </div>             
                
                <hr size= 1px color = black>
                
                <h1 id="candidatos">Os candidatos a eleição 2019</h1>
                <p>Passe o ponteiro por cima para ver mais detalhes.</p>
                
                <ul id="album-fotos">
                    <li id="foto01"><span></span></li>
                </ul>
                    <h2 id='chapa01'>Chapa 01</h2>
                    <h3 id='chapa01'>Candidato: &nbsp;Mario Batista Magalhães</h3>
                    <h3 id='chapa01'>Proposta de campanha:</h3>
                    <p id='chapa01'>Lutar para que todos os alunos presentes no curso de Sistemas de informação consiga trabalhar na área<br/> 
                    vai pedir a troca de todos os computadores da faculdade.</p>
                    
                    <hr size= 1px color = black>
                    <p>Passe o ponteiro por cima para ver mais detalhes.</p>
                
                    <ul id="album-fotos">
                        <li id="foto02"><span></span></li>
                    </ul>
                        <h2 id='chapa02'>Chapa 02</h2>
                        <h3 id='chapa02'>Candidato:&nbsp;Marco Antônio Pilon</h3>
                        <h3 id='chapa02'>Proposta de campanha:</h3>
                        <p id='chapa02'>Lutar pelo direito dos alunos contra os professores que só falam de <em>SAP, TOTUS, MOÇADA</em> pelo direito<br/> 
                        dos homens não usarem saias, Promete não faltar em reuniões da cordenadoria.</p>

                        <hr size= 1px color = black>
                        <h1 id="votar">Votação</h1>
                    
                        
                       
                                <table id="tabelaestilo">
                                   <caption>Candidatos</caption>
                                   <tr><td><img src="_imagens/foto03.png" /></td><td><img src="_imagens/foto04.png" /></td></tr>
                                   <tr><td><h2>Mario Batista Magalhães</h2></td><td><h2>Marco Antônio Pilon</h2></td></tr>
                                </table>
                              
                                <form method="" action="">
                                    <fieldset>
                                        <legend>Vote ↓ Aqui</legend>
                                        
                                            <?php
                                                if(isset($_SESSION['msg'])){
                                                    
                                                    echo $_SESSION['msg'] . "<br><br>";
                                                    unset($_SESSION['msg']);
                                                }
                                               //pesquisar candidato
                                               $result_cand = "SELECT * FROM CANDIDATO";
                                               $resultado_cand = mysqli_query($conn, $result_cand);
                                               
                                               //lendo tupla da tabela
                                               while($row_candidato = mysqli_fetch_assoc($resultado_cand)){
                                                   echo"CHAPA:".$row_candidato['id']."<br>";
                                                   echo"NOME:".$row_candidato['nome']."<br>";
                                                   echo"TOTAL DE VOTOS:".$row_candidato['qtd_voto']."<br><br>";
                                                   echo"<a href='votar.php?id =".$row_candidato['id']."'><h2>VOTAR</h2></a><br><hr size=2pt color=black>";
                                               }
                                            ?>
                                    </fieldset>
                                </form>
 
                <h1 id="faleConosco">Fale conosco</h1>
                
                <form method="POST" action="#" id="msg">
                    <fieldset id="mensagem">
                        <legend id="msg">Mensagem do Usúario</legend>
                        <p><label for="cMsg">Mensagem</label></p>
                        <textarea name="tMsg" id="cMsg" cols="40" rows="15" placeholder="Deixe aqui sua mensagem"></textarea>
                        <input type="image" name="tEnviar" id="cEnviar"src="_imagens/botao-enviar.png"/>
                    </fieldset>
                    <a href="#topo"><h1>VOLTAR ⬆ TOPO</h1></a>
                </form>
            </section>
            
            <footer id="rodape">
		<p>Copyright 2018 &copy;- by CarlosFreitas</p>
            </footer>
        </div>
</body>
</html>