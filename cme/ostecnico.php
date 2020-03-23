
<?php

require("menutec.php");
include("conexao.php");

$host = "localhost";
$user = "root";
$pass = "";
$banco = "cme";
$conexao = mysqli_connect($host, $user, $pass)or die (mysqli_error());
mysqli_select_db($conexao, $banco) or die (mysqli_error());
?>
<?php

$consulta = "SELECT * FROM ordemdeservico WHERE status = 1";
$con = $conexao->query($consulta)

?>

<html>
	<head>
		<meta charset="utf8">
		<title></title>
		 
		<link rel="stylesheet" type="text/css" href="janela.css">
		<link rel="stylesheet" type="text/css" href="tabela.css">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<link type="text/javascript" src="js/bootstrap.min.js"></script>
	
	
		<style type="text/css">
    body {background-color:#FFF; font-family: Tahoma,Arial;}
    #posiciona {
        position:  /* posição absoluta ao elemento pai, neste caso o BODY */
        /* Posiciona no meio, tanto em relação a esquerda como ao topo */
        left: 40%; 
        top: 35%;
        width: 1050px; /* Largura da DIV */
        height: 550px; /* Altura da DIV */
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
	</head>
	<body>
	<div id="posiciona">

	<div id="fechar" align=right><a href="javascript:fechar()"><img src="sair.png" height="20" width="20"/></a></div>
	<br>
	<center><p><h5><font color="black"> Solicitações pendentes: </font></p></h5></center>
	<div class="table-responsive">
		<table class="table" >
			 <thead class="thead-dark">
				<tr>
					<th scope="col">Código:  </th>
					<th scope="col">Solicitante: </th>
					<th scope="col">Local:</th>
					<th scope="col">Encaminhado para: </th>
					<th scope="col">Data:</th>
					<th scope="col">Setor:</th>
					<th scope="col">Descrição:</th>
					<th scope="col">Status:</th>
					<th scope="col">Ação:</th>
				</tr>
			</thead>
			<?php while($dado = $con->fetch_array()){ ?>
			<tbody>
				<tr>
					<td><?php echo $dado["id"]; ?></td>
					<td><?php echo $dado["nome"]; ?></td>
					<td><?php echo $dado["local"];?></td>
					<td><?php echo $dado["encaminhar"]; ?></td>
					<td><?php echo date ("d/m/Y", strtotime($dado["dtregistro"])); ?></td>
					<td><?php echo $dado["setor"]; ?></td>
					<td><?php echo $dado["descricao"]; ?></td>
					<td><?php if($dado["status"] == 1) echo "pendente" ?></td>
					<td><a href="atender.php"><input type="submit" class="campo_submit" value="Atender" /></td>
				</tr>
			</tbody>
		</div>
			<?php } ?>


	</body>
</html>


