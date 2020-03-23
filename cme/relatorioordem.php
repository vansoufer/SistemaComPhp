<?php
require ("menu1.php");
?>
<html>
 <head>
  <title>Cadastro Funcionarios</title>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="formstyle.css">    
  <style type="text/css">
    body {background-color:#FFF; font-family: Tahoma,Arial;}
    #posiciona {
        position:  /* posição absoluta ao elemento pai, neste caso o BODY */
        /* Posiciona no meio, tanto em relação a esquerda como ao topo */
        left: 40%; 
        top: 35%;
        width: 700px; /* Largura da DIV */
        height: 500px; /* Altura da DIV */
        /* A margem a esquerda deve ser menos a metade da largura */
        /* A margem ao topo deve ser menos a metade da altura */
        /* Fazendo isso, centralizará a DIV */
        margin-left: 130px;
        margin-top: 0px;
        background-color: #666;
        color: #FFF;
        background-color: #DCDCDC;
        text-align: /* Centraliza o texto */
		border-radius: 10px 10px 0px 0px ;
		-webkit-border-radius: 10px 0px 10px 10px ;
		-moz-border-radius: 20px 0px 20px 20px ;
		-ms-border-radius: 20px 0px 20px 20px ;
		-o-border-radius: 20px 0px 20px 20px ;}
	
    #fechar { 
	margin: 0px; font-size: 16px font-color: black;
		
	}
	
    #fechar { 
	margin: 0px; font-size: 16px font-color: black;
		
	}
	
	</style>
  <script>
    function fechar() { 
        document.getElementById("posiciona").style.display = 'none'; 
    }
 </script>
 </head>
  

<body>
 
<div id="posiciona" class="padding10">

<div id="fechar" align=right><a href="javascript:fechar()"><img src="sair.png" height="20" width="20"/></a></div>
<fieldset class="grupo">
<div class="campo"> 
<label>Relatório por Ordem de Serviço</label></div></fieldset>
<form action="index.php" method="post">

<fieldset>
        <fieldset class="grupo">
            <div class="campo">
			<label for="nome">Nome da Ordem de Serviço:</label>
			<input type='text' name='nomeord' id='nomeord' size='20' required="required" >
			</div>
		</fieldset>
		<fieldset>
        <fieldset class="grupo">
            <div class="campo">
			<label for="nome">Data Inicial:</label>
			<input type='date' name='dti' id='dti' size='8' required="required" >
			</div>
		</fieldset>
		<fieldset class="grupo">
			<div class="campo">
			<label for="nome">Data Final:</label>
			<input type='date' name='dtf' id='dtf' size='8' required="required">
			</div>
        </fieldset>
		
		
		<fieldset class="button">
			<button class="botao-legal" type="submit" name="submit">Enviar</button>
			</fieldset>
</fieldset>
</form>
</div>

</body>
</html>