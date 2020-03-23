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
	
	$id = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
	
    $chamada = "SELECT * FROM setores WHERE codigo ='$id'";
	$resultado_usuario = mysqli_query($conexao, $chamada);
	$row = mysqli_fetch_assoc($resultado_usuario);

	
 ?>
  

 
<div id="posiciona" class="padding10">

<div id="fechar" align=right><a href="javascript:fechar()"><img src="sair.png" height="20" width="20"/></a></div>
<fieldset class="grupo">
<div class="campo"> 
<label for""><h4>Cadastro de Setores</h4></label></div></fieldset>
<form action="alterarsetor.php" method="post">
		
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
			<input type="hidden" name='codigo' value="<?php echo $row['codigo']; ?>">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" style="width: 30em" value="<?php echo $row['nome']; ?>">
            </div>

        </fieldset>
        
		<div class="campo">
                <label for="status">Status</label>
                <select name="status" id="status" value="<?php echo $row['status']; ?>">
                    <option value="">--</option>
                    <option value="ativo">Ativo</option>
					<option value="inativo">Inativo</option>
				</select>
            </div>
		</fieldset>
		
		
        <fieldset class="button">
       <input class="botao-legal" type='submit' value='Alterar'></a>
		<input class="botao-legal" type='button' value='Voltar' onclick='history.go(-1)' /></td>
		</fieldset>
    </fieldset>
</form>
</div>
 
</body>
</html>