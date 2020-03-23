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
 
<div id="posiciona">

<div id="fechar" align=right><a href="javascript:fechar()"><img src="imagens/sair.png" height="20" width="20"/></a></div>
<fieldset class="grupo">
<form action="" method="post">

<?php
//conexao com o banco
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cme";
$conexao = mysqli_connect($host, $user, $pass)or die (mysqli_error());
mysqli_select_db($conexao, $banco) or die (mysqli_error());
?>

<?php
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$dtcompra = date("Y-m-d H:i:s",strtotime($_POST['dtcompra'])); // transforma a data no formato padrão do mysql 2019/10/05
$setor = $_POST['setor'];
$dtfabricacao = date("Y-m-d H:i:s",strtotime($_POST['dtfabricacao']));
$tpgarantia = $_POST['tpgarantia'];
$descricao = $_POST['descricao'];

$sql = mysqli_query($conexao,"INSERT INTO  equipamentos (codigo, nome, dtcompra, setor, dtfabricacao, tpgarantia, descricao) VALUES 
('$codigo', '$nome', '$dtcompra', '$setor', '$dtfabricacao', '$tpgarantia', '$descricao')");
echo "<font color=#333><center><br><br><br><br><br><h1>Cadastro realizado com sucesso</h1></center>";
mysqli_close($conexao);
?>

<center><a href="./cadastro1.php?p=formulario3">Clique aqui para </a> para novo cadastro</center>
</div>
</body>
</html>