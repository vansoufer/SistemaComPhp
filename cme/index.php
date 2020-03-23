<?php


	include_once("conexao.php");
	
	
	$html = '<table border=0>';
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<td>Codigo</td>';
	$html .= '<td>Nome</td>';
	$html .= '<td>Local</td>';
	$html .= '<td>Data de Reg.</td>';
	$html .= '<td>Setor</td>';
	$html .= '<td>Descrição</td>';
	$html .= '</tr>';
	$html .= '</thead>';
	
	
	$di = date("Y-m-d H:i:s",strtotime($_POST["dti"]));
	$df = date("Y-m-d H:i:s",strtotime($_POST["dtf"]));
	
	$pesquisar = $_POST['dti'];
			
	while ($pesquisar<=$df){
	$chamada = "SELECT * FROM ordemdeservico WHERE dtregistro LIKE '%".$pesquisar."%' LIMIT 5";
	$chamada1 = mysqli_query($conexao, $chamada);
	
	while($row_ordem = mysqli_fetch_assoc($chamada1)){
		$html .= '<tbody >';
		$html .= '<tr><td>'.$row_ordem['id'] . "</td>";
		$html .= '<td>'.$row_ordem['nome'] . "</td>";
		$html .= '<td>'.$row_ordem['local'] . "</td>";
		$html .= '<td>'.$row_ordem['dtregistro'] . "</td>";
		$html .= '<td>'.$row_ordem['setor'] . "</td>";
		$html .= '<td>'.$row_ordem['descricao'] . "</td></tr>";
		$html .= '</tbody>';
	}
	$pesquisar ++;
	}
	$html .= '</table>';
	
	use Dompdf\Dompdf;
	// include autoloader
		require_once 'dompdf/autoload.inc.php';
		
		$dompdf = new DOMPDF();
		
		$dompdf->load_html('
			<img src="imagens/logo.png" style="padding-top:18px;height:70px;"> 
			<h3 style="text_align: center;"> RELATÓRIO POR DATA </h3>
			
			
			'. $html .'
		
		
		');
		//renderizar o html
		$dompdf->render();
		
		//exibir a pagina
		$dompdf->stream(
			"relatório_por_data.pdf",
			array(
				"Attachment" => false
			)
		);
?>