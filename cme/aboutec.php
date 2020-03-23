
<?php
require ("menutec1.php");
?>

<html>
	<head>
		
		<title>Cadastro Funcionarios</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="formstyle.css">    
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<link type="text/javascript" src="js/bootstrap.min.js"></script>
		  
		<style type="text/css">
			body {background-color:#FFF; font-family: Tahoma,Arial;}
    #posiciona {
        position:/* posição absoluta ao elemento pai, neste caso o BODY */
        /* Posiciona no meio, tanto em relação a esquerda como ao topo */
        left: 40%; 
        top: 35%;
        width: 900px; /* Largura da DIV */
        height: 500px; /* Altura da DIV */
        /* A margem a esquerda deve ser menos a metade da largura */
        /* A margem ao topo deve ser menos a metade da altura */
        /* Fazendo isso, centralizará a DIV */
        margin-left: 130px;
        margin-top: 0px;
        background-color: #666;
        color: #111;
        background-color: #DCDCDC;
        text-align: /* Centraliza o texto */
		border-radius: 10px 10px 0px 0px ;
		-webkit-border-radius: 10px 0px 10px 10px ;
		-moz-border-radius: 20px 0px 20px 20px ;
		-ms-border-radius: 20px 0px 20px 20px ;
		-o-border-radius: 20px 0px 20px 20px ;
		overflow:scroll;
		}
	
    #fechar { 
	margin: 0px; font-size: 16px font-color: black;
		
	}
	
    #fechar { 
	margin: 0px; font-size: 16px font-color: black;
		
	}
	.logo{
	width: 400px;
	height:150px;	
    opacity:0.5;
}

.logo:hover{
   opacity:1;
}
		</style>
		

	</head>
	<body>
	<div id="posiciona" class="">

	<div id="fechar" align=right><a href="javascript:fechar()"><img src="sair.png" height="20" width="20"/></a></div>
	<center><img class="logo" src='imagens/logo.png'/></center>
		<div class="body">
		<center>

				<p class="font-weight-bolder">
				<h5> Sobre o sistema de controle e manutenção de equipamentos: </h5>
				<b><br><br>Desenvolvedores:</b> O sistema foi desenvolvido pelos alunos do curso<i> Análise e Desenvolvimento de Sistemas</i> da faculdade de tecnologia<i>(FATEC)</i> de Ourinhos,
				<br>Adriana Mataveli Viana<br>
				José Ricardo Cezário<br>
				Vanessa Souto<br>
				e Wagner Souza.<br><br>
				<b>Motivação:</b> A ideia surgiu da necessidade de um dos integrantes do grupo de um sistema que facilitasse no registro 
				e acompanhamento das manutenções realizadas em equipamentos na empresa que ele trabalhava.<br>
				<br><b>Data de inicio:</b> o projeto teve inicio em 2018 com a documentação e estudos correlatos, apenas em 2019 foi iniciado o desenvolvimento do sistema.<br>
				<br><b>Objetivo:</b> A intenção é que o sistema auxilie os colaboradores ao eliminar processos manuais, economizando tempo e garantido que as informações sejam mantidas e organizadas,
				<u>facilitando</u> o acesso a elas de forma segura.	 </p>
			</div></center>
		</div>	
	</body>
</html>
		