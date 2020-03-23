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
    <li><a href="menutec.php"><img src="imagens/logo.png" height="50" width="100" border-left="5" border-right="5"/></a>
        <li><a href="menutec.php" style="padding-top:18px;height:70px;">Home<br><br><br></a>
    </ul>
    
    <ul>
        <li><a href="#" style="padding-top:18px;height:70px;"> Ajuda <br><br><br></a>
    <ul>
            <li><a href="aboutec.php">Sobre</a></li>
			<li><a href="contatotec.php">Contato</a></li>
            
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
			<a href="menutec.php"><img src="imagens/perfil.png"><br>Chamados<br><br><br></a>
			<a href="menutec1.php"><img src="imagens/relatorios.png"><br>Relatorios<br><br><br></a>
			<a href="contatotec.php"><img src="imagens/telefone.png" style="max-width:30px"><br> Contato </a>
			</ul>
		</nav>
      </div>
      <div id="colEsq">
     </div>  
			<?php
				$valor = @$_GET['p'];
				if ($valor == 'formulario1'){require_once 'formulario.html';}
				else 
				if ($valor == 'formulario2'){require_once 'setor.html';}
				else 
				if ($valor == 'formulario3'){require_once 'equipamento.html';}
				else 
				if ($valor == 'formulario4'){require_once 'fornecedor.html';}
				else 
				if ($valor == 'formulario5'){require_once 'item.html';}
				else 
				if ($valor == 'ordem1'){require_once 'gerarordem.html';}
				else 
				if ($valor == 'relatorio1'){require_once 'relatorio.php';}
			
			?>
 </body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</html>
