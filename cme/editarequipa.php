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
        height: 525px; /* Altura da DIV */
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
	
    $chamada = "SELECT * FROM equipamentos WHERE codigo ='$id'";
	$resultado_usuario = mysqli_query($conexao, $chamada);
	$row = mysqli_fetch_assoc($resultado_usuario);

	
 ?>

 
<div id="posiciona" class="padding10" >

<div id="fechar" align=right><a href="javascript:fechar()"><img src="imagens/sair.png" height="20" width="20"/></a></div>
<fieldset class="grupo">
<div class="campo"> 
<label for""><h4>Cadastro Equipamentos</h4></label></div></fieldset>

<form action="alterarequipa.php" method="post">
		
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" style="width: 30em" value="<?php echo $row['nome']; ?>">
            </div>
			
            <div class="campo">
                <label for="nome">Código</label>
                <input type="text" id="codigo" name="codigo" style="width: 10em" value="<?php echo $row['codigo']; ?>">
            </div>
        </fieldset>
        
		<fieldset class="grupo">
        <div class="campo">
            <label for="dtcompra">Data da Compra</label>
            <input type="date" id="dtcompra" name="dtcompra" style="width: 10em" value="<?php echo $row['dtcompra']; ?>">
        </div>
		
            <div class="campo">
                <label for="dtfabricacao">Data de Fabricação</label>
                <input type="date" id="dtfabricacao" name="dtfabricacao" style="width: 10em" value="<?php echo $row['dtfabricacao']; ?>">
           </div>
		   </fieldset>
		<fieldset class="grupo">
        <div class="campo">
                <label for="setor">Setor</label>
                <select name="setor" id="setor" value="<?php echo $row['setor']; ?>>
                    <option value="setor">--</option>
                    <option value="adm">Administrativo</option>
					<option value="lab">Laboratório</option>
					<option value="tecnico">Técnico</option>
                </select>
            </div>
			<div class="campo">
				<label for="tpgarantia">Garantia</label>
                <input type="text" id="tpgarantia" name="tpgarantia" style="width: 10em" value="<?php echo $row['tpgarantia']; ?>">
			</div>	
        </fieldset>
		<fieldset class="grupo">
		<div class="campo">
                <label for="descricao">Descrição</label>
                <textarea name='descricao' value='descricao' rows='5' cols='80' value="<?php echo $row['descricao']; ?>">
				</textarea>
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