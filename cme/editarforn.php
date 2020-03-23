<?php
require ("cadastro1.php");

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
        left: 18%; 
        top: 35%;
        width: 800px; /* Largura da DIV */
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
		-o-border-radius: 20px 0px 20px 20px ;
        
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

 <?php
	$host = "localhost";
    $user = "root";
    $pass = "";
    $banco = "cme";
    //Criar a conexao
    $conexao = mysqli_connect($host, $user, $pass)or die (mysqli_error());
    mysqli_select_db($conexao, $banco) or die (mysqli_error());
	
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	
    $chamada = "SELECT * FROM fornecedores WHERE id ='$id'";
	$resultado_usuario = mysqli_query($conexao, $chamada);
	$row = mysqli_fetch_assoc($resultado_usuario);

	
 ?>
  

 
<div id="posiciona" class="padding10">

<div id="fechar" align=right><a href="javascript:fechar()"><img src="imagens/sair.png" height="20" width="20"/></a></div>
<fieldset class="grupo">
<div class="campo"> 
<label for""><h4>Cadastro Fornecedores</h4></label></div></fieldset>
<form action="alterarforn.php" method="post">
		
    <fieldset>
			<input type="hidden" name='id' value="<?php echo $row['id']; ?>">
			<fieldset class="grupo">
            <div class="campo">
                <label for="razao">Razão Social</label>
                <input type="text" id="razao" name="razao" style="width: 30em" value="<?php echo $row['razao']; ?>">
            </div>
        </fieldset>
        
		<fieldset class="grupo">
		<div class="campo">
                <label for="cnpj">CNPJ</label>
                <input type="text" id="cnpj" name="cnpj" style="width: 10em" value="<?php echo $row['cnpj']; ?>">
            </div>
        <div class="campo">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" style="width: 10em" value="<?php echo $row['telefone']; ?>">
        </div>
		</fieldset>
		<fieldset class="grupo">
		<div class="campo">
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" style="width: 30em" value="<?php echo $row['endereco']; ?>">
        </div>
        </fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="prodforn">Produto Fornecido</label>
                <input type="text" id="prodforn" name="prodforn" style="width: 30em" value="<?php echo $row['prodforn']; ?>">
           </div>
			
        </fieldset>
		
		
        <fieldset class="button">
        <a href=""><input class="botao-legal" type='submit' value='Alterar'></a>
		<input class="botao-legal" type='button' value='Voltar' onclick='history.go(-1)' /></td>
		</fieldset>
    </fieldset>
</form>
</div>
 
</body>
</html>