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
	
    $chamada = "SELECT * FROM users WHERE id ='$id'";
	$resultado_usuario = mysqli_query($conexao, $chamada);
	$row = mysqli_fetch_assoc($resultado_usuario);

	
 ?>
  

 
<div id="posiciona" class="padding10">

<div id="fechar" align=right><a href="javascript:fechar()"><img src="imagens/sair.png" height="20" width="20"/></a></div>
<fieldset class="grupo">
<div class="campo"> 
<label for"cadastro"><h4>Cadastro de Usuário</h4></label></div></fieldset>
<form action="alteraruser.php"" method="post">
		
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
				<input type="hidden" name='id' value="<?php echo $row['id']; ?>">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" style="width: 20em" value="<?php echo $row['nome']; ?>">
            </div>
			</fieldset>
			<fieldset class="grupo">
            <div class="campo">
                <label for="snome">Sobrenome</label>
                <input type="text"  id="sobrenome" name="sobrenome" style="width: 20em" value="<?php echo $row['sobrenome']; ?>">
            </div>
        </fieldset>
		<fieldset class="grupo">
		<div style="color:#666;">
			<label class="checkbox" value="<?php echo $row['sexo']; ?>"> 
				<input type="radio" name="sexo" id="sexo" value="masculino">Masculino
				<input type="radio" name="sexo" id="sexo" value="feminino"> Feminino
			</label>
		</div>
		</fieldset>
		<fieldset class="grupo">
        <div class="campo">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" style="width: 10em" value="<?php echo $row['cpf']; ?>">
        </div>
        <div class="campo">
                <label for="perfil">Perfil</label>
                <select name="perfil" id="perfil" value="<?php echo $row['perfil']; ?>">
                    <option value="<?php echo $row['perfil']; ?>">--</option>
                    <option value="<?php echo $row['perfil']; ?>">Supervisor</option>
					<option value="<?php echo $row['perfil']; ?>">Encarregado</option>
					<option value="<?php echo $row['perfil']; ?>">Técnico</option>
                </select>
            </div>
		</fieldset>
        <fieldset class="grupo">
            <div class="campo">
				<label for="login">Login</label>
                <input type="text" id="login" name="login" style="width: 10em" value="<?php echo $row['login']; ?>">
			</div>	
			<div class="campo">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" style="width: 10em" value="senha">
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