<?php
require ("menucontatouser.php");
?>
<html>
 <head>
  <title>Contato</title>
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
        height: 550px; /* Altura da DIV */
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

<form action="" method="post">
		
    <label for"cadastro"><h4><p align="center" class="font-weight-light" > Contato</p></h4></label></div></fieldset>
<p class="font-weight-light">
		


<fieldset>
	<fieldset class="grupo">
            <div class="campo">
				<label for="assunto">Assunto:</label>
				<input type="text" name="assunto" style="width: 30em" id="assunto" value="">
				</div>
			</fieldset>
        <fieldset class="grupo">
            <div class="campo">
				<label for="nome">Nome:</label>
				<input type="text" name="nome" style="width: 30em" id="nome" value="">
				</div>
			</fieldset>	
			<fieldset class="grupo">
            <div class="campo">
				<label for="email">E-mail:</label>
				<input type="text" name="email" style="width: 30em" id="email" value="">
				</div>
			</fieldset>	
			
					
			<fieldset class="grupo">	
			<div class="campo">
                <label for="descricao">Deixe sua Mensagem: 
				<textarea name='descricao' id='descricao' rows='5' cols='57' maxlength=''>
				</textarea>
			</fieldset>		
		
		<fieldset class="button">
			<input class="botao-legal" type='submit' name="submit" value='Enviar'>
			<input class="botao-legal" type='reset' value='Limpar'>
		
		</div>
		</fieldset>
			



</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
</div>
 
</body>
</html>