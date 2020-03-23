<html>
<head>
  <meta charset="UTF-8" />
  <title>Controle e Manutenção de Equipamentos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
		
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
<style>
.loader {
  border: 10px solid #f3f3f3;
  border-radius: 50%;
  border-top: 10px solid #3498db;
  width: 50px;
  height: 50px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body background="imagem01.jpg">
<div id="divCenter">
<?php
//conexao com o banco
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cme";
$conexao = mysqli_connect($host, $user, $pass)or die (mysqli_error());
mysqli_select_db($conexao, $banco) or die (mysqli_error());
?>


	<title>Autenticando usuario</title>
	<script  type="text/javascript">
		function loginsucessfully(){ //função que controla o tempo de espera de redirecionamento
			setTimeout("window.location = 'painel.php'", 4000);
		}

		function loginfailed(){
			setTimeout("window.location = 'login.html'", 4000);
		}
	</script>

<?php
//pegando os dados do banco pra abrir uma sessão do usuario já cadastrado
$login = $_POST ['login'];
$perfil = $_POST['perfil'];
$senha = $_POST ['senha'];

$sql = mysqli_query($conexao,"SELECT * FROM users WHERE login = '$login' and senha = '$senha' ") or die (mysqli_error());
$sql = mysqli_query($conexao,"SELECT * FROM users WHERE perfil = '$perfil' and login = '$login'") or die (mysqli_error());
$sql = mysqli_query($conexao,"SELECT * FROM users WHERE senha = '$senha' and perfil = '$perfil'") or die (mysqli_error());
$row = mysqli_num_rows($sql);
?>

<?php
if ($row > 0){
	session_start();
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['perfil'] = $_POST['perfil'];
	$_SESSION['senha'] = $_POST['senha'];
	echo "<br><br><center>Você foi autenticado com sucesso! Aguarde um instante.</b></center>";
	echo "<script>loginsucessfully()</script>";
	
} else {
	echo "<br><br><center>Dados inválidos!!!<br>Aguarde um instante e tente novamente.</center>";
	echo "<script>loginfailed()</script>";
}
echo ' <br><center><div class="loader"></div></center>';
?>

</div>
</body>
</html>