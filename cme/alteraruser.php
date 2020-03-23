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
$id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST,'sobrenome', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST,'sexo', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST,'cpf', FILTER_SANITIZE_STRING);
$perfil = filter_input(INPUT_POST,'perfil', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST,'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);


$chamada = "UPDATE users SET  nome='$nome', sobrenome='$sobrenome', sexo='$sexo', cpf='$cpf', perfil='$perfil', login='$login', senha='$senha' WHERE id='$id'"; 
$resultado_usuario = mysqli_query($conexao, $chamada);
echo "<font color=#333> <center><br><br><br><br><br><h3>Alteração realizada com sucesso</h3></center></font>";
mysqli_close($conexao);
?>


</div>
</body>
</html>