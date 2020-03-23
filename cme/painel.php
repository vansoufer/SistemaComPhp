<html>
<head>
  <meta charset="UTF-8" />
  <title>Controle e Manutenção de Equipamentos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <style type="text/css">
        * { margin: 0; padding: 0; font-family:Arial; font-size:14pt;}
        #divCenter { 
                background-color: rgba(123, 123, 123, 0.7); 
                width: 500px; 
                height: 250px; 
                left: 45%; 
                margin: -130px 0 0 -210px; 
                padding:10px;
                position: absolute; 
                top: 50%; }
				
    </style>
	<style type="text/css"> 
		body { 
		background-repeat: no-repeat; 
		background-image: fundo.jpg; 
		background-size:100%;
		
		
		} 
</style> 
</head>
<body background="imagens/imagem01.jpg">
<div id="divCenter">
<?php
//conectando com o banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cme";
$conexao = mysqli_connect($host, $user, $perfil, $pass) or die (mysqli_error());
mysqli_select_db($conexao, $banco) or die (mysqli_error());
?>
<?php
//Não permite que o usuario acesse a pagina Painel diretamenta, somente se esse estiver logado
	session_start();
	//verifica se possui uma sessão aberta
	if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])) {
		header("Location: login.html"); // redireciona para a pagina de login, obrigando o usuario a logar pra acessar o painel
		exit;
	} else 
		if($_SESSION["perfil"]==tecnico) { 
		header("Location: menutec.php");
			
	}else 
		if($_SESSION["perfil"]==administrador) { 
			header("Location: cadastro1.php");	
		}else 
			if($_SESSION["perfil"]==usuario) { 
			header("Location: menuuser.php");
		}
	
	
?>


	<br>
	<center><a href="logout.php">Sair</a></center>  <!--Link que ao usuario clikar em sair ele faz logout-->
	</div>
</body>
</html>