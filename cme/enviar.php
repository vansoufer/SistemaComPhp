<?php

$assunto = $_POST['assunto'];

$corpo = "
		Assunto: ".$_POST['assunto']."
		Nome: ".$_POST['nome']."
		Email: " .$_POST['email']."
		Mensagem: " .$_POST['descricao']."
";

mail('vansouferr@gmail.com',$assunto,$corpo,'From: CME');
echo 'Seus dados foram enviador com sucesso';
?>