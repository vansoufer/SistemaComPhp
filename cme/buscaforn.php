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
        left: 40%; 
        top: 35%;
        width: 700px; /* Largura da DIV */
        height: 500px; /* Altura da DIV */
        /* A margem a esquerda deve ser menos a metade da largura */
        /* A margem ao topo deve ser menos a metade da altura */
        /* Fazendo isso, centralizará a DIV */
        margin-left: 130px;
        margin-top: 10px;
        background-color: #666;
        color: #FFF;
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
	
	</style>
  <script>
    function fechar() { 
        document.getElementById("posiciona").style.display = 'none'; 
    }
 </script>
 </head>
  

<body>
 
<div id="posiciona" class="padding10">

<div id="fechar" align=right><a href="javascript:fechar()"><img src="imagens/sair.png" height="20" width="20"/></a></div>
<font color="black"> Pesquisa por Fornecedor
<form action="" method="post">
	
	<?php
	
	$host = "localhost";
    $user = "root";
    $pass = "";
    $banco = "cme";
    //Criar a conexao
    $conexao = mysqli_connect($host, $user, $pass)or die (mysqli_error());
    mysqli_select_db($conexao, $banco) or die (mysqli_error());
    
    	
	$pesquisar = $_POST['pesquisar'];
    $chamada = "SELECT * FROM fornecedores WHERE razao LIKE '%".$pesquisar."%' or id = '".$pesquisar."' LIMIT 5";
		
    $chamada1 = mysqli_query($conexao, $chamada);
	while($chamada2 = mysqli_fetch_array($chamada1)){
		echo "<br>Codigo: ".$chamada2['id']."<br>";
		echo "CNPJ: ".$chamada2['cnpj']."<br>";
		echo "Razão Social: ".$chamada2['razao']."<br>";
		echo "Telefone ".$chamada2['telefone']."<br>";
		echo "Produto Fornecido: ".$chamada2['prodforn']."<br><br>";
		echo "<a href='editarforn.php?id=".$chamada2['id']."'><img src='imagens/lapis1.png' style='max-width:30px'> Editar</a><br><br>";
				
	}
	
	
	?>
	<form>
	<input class="botao-legal" type="button" value="Imprimir" onClick="window.print()"/>
	<input class="botao-legal" type='button' value='Voltar' onclick='history.go(-1)' /></td>
    </form>
</div>
</body>
</html>