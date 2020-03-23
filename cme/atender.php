  <?php
require("menutec.php");
?>

<html>
 <head>
  <title>Atender Ordem de Serviço</title>
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

<form action="cadatender.php" method="post">
		
    <label for"cadastro"><h4><p align="center" class="font-weight-light" > Atender Ordem de Serviço</p></h4></label></div></fieldset>
<p class="font-weight-light">
		


<fieldset>
		
        <fieldset class="grupo">
		   <div class="campo">
				<label for="id">ID:</label>
				<input type="text" name="id" style="width: 30em" id="id" value="">
				</div>
			</fieldset>	
				
			<fieldset class="grupo">	
			<div class="campo">
            <label for="datafinal">Data</label>
            <input type="date" id="datafinal" name="datafinal" style="width: 10em" value="">
			</div>
				
				<div class="campo">
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="">--</option>
                    <option value="encerrar">Encerrar
					<option value="andamento">Em Andamento
                </select>
            </div>

			
		</fieldset>		
		
		<fieldset class="grupo">
		<div class="campo">		
			<label for="nometec">Nome do técnico responsável: 	
			<input type='text' name='nometec' id="nometec" style="width: 30em" value=''>
			</div>
		</fieldset>	
		<fieldset class="grupo">	
			<div class="campo">
                <label for="solucao">Solução aplicada: 
				<textarea name='solucao' id='solucao' rows='5' cols='80' maxlength=''>
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