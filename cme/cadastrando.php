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
<body background="imagem01.jpg">
<div id="divCenter">
<?php
//conectando com o banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cme";
$conexao = mysqli_connect($host, $user, $pass) or die (mysqli_error());
mysqli_select_db($conexao, $banco) or die (mysqli_error());
?>

<?php
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$sql = mysqli_query($conexao,"INSERT INTO  usuarios (cpf, nome, login, senha) VALUES ('$cpf', '$nome', '$login', '$senha')");
echo "<center><br><br><br><br><br><h1>Cadastro realizado com sucesso</h1></center>";
mysqli_close($conexao);
?>
	<center><a href="inicial.html">Clique aqui</a> para efetuar login</center>
	</div>
</body>
</html>