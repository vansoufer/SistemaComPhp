<html>
<head>
<meta charset="utf-8">
<title>Controle e Manutenção de Equipamentos</title>
<link rel="stylesheet" type="text/css"  href="estilo1.css" />
<link rel="stylesheet" type="text/css"  href="estilo.css" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body background="imagens/logo1.png" bgproperties="fixed" >

 <div>
  <nav>

  <ul class="menu">
  <ul>
    <li><a href=""><img src="imagens/logo.png" height="50" width="100" border-left="5" border-right="5"/></a>
        <li><a href="menuuser.php?p=ordem1" style="padding-top:18px;height:70px;">Gerar Ordem de Serviço<br><br><br></a></li>  
    
    <ul>
       
        </li></ul>
    <ul>
        <li><a href="#" style="padding-top:18px;height:70px;"> Ajuda <br><br><br></a>
    <ul>
            <li><a href="#">Ajuda</a></li>
            <li><a href="about.php">Sobre a Empresa</a></li>
            <li><a href="#"</a>Atendimento</li>
      <li><a href="#"></a></li> 
        </ul></ul>
        <ul class="sair">
    <li><a href="logout.php" style="padding-top:18px;height:70px;"> Sair <br><br><br></a> </li>
    </ul>
</ul>

</nav>
  </div>
  
    <div id="conteudoEsq"> 
		<nav class="navigation">
			<ul class="mainmenu" align="center"><br><br>
			
			<a href=""><img src="imagens/perfil.png"><br> Ordem de Serviço<br><br><br></a>
			
			<a href="menucontatouser.php"><img src="imagens/telefone.png" style="max-width:30px"><br> Contato </a>
			</ul>
		</nav>
      </div>
      <div id="colEsq">
     </div>  
			<?php
				$valor = @$_GET['p'];
				 
				if ($valor == 'ordem1'){require_once 'gerarordem.html';}
				else 
				if ($valor == 'relatorio1'){require_once 'relatorio.php';}
			
			?>
 </body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</html>