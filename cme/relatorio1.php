<?php
require ("menu.php");
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
<font color="black"> Relatório por data
<form action="" method="post">

<?php

		$di = date("Y-m-d H:i:s",strtotime($_POST["dti"]));
		$df = date("Y-m-d H:i:s",strtotime($_POST["dtf"]));
		
			
				
			$host = "localhost";
			$user = "root";
			$pass = "";
			$banco = "cme";
			//Criar a conexao
			$conexao = mysqli_connect($host, $user, $pass)or die (mysqli_error());
			mysqli_select_db($conexao, $banco) or die (mysqli_error());
			
			$pesquisar = $_POST['dti'];
			
				while ($pesquisar<=$df){
				$chamada = "SELECT * FROM ordemdeservico WHERE dtregistro LIKE '%".$pesquisar."%' LIMIT 5";
				$chamada1 = mysqli_query($conexao, $chamada);
				
					while($chamada2 = mysqli_fetch_array($chamada1)){
						
						echo "<br>Nome: ".$chamada2['nome']."<br>";
						echo "Local: ".$chamada2['local']."<br>";
						echo "Encamiar para: ".$chamada2['encaminhar']."<br>";
						echo "Data: ".$chamada2 ['dtregistro']."<br>";
						echo "Setor: ".$chamada2['setor']."<br>";
						echo "Descrição: ".$chamada2['descricao']."<br><br>";
						}
				$pesquisar ++;
			
				}
				
?>
<form>
	
	<input class="botao-legal" type="button" value="Imprimir" onClick="window.print()"/>
	<input class="botao-legal" type='button' value='Voltar' onclick='history.go(-1)' /></td>
    </form>

</body>
</html>