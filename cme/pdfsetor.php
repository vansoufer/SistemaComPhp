<?php


	include_once("conexao.php");
	
	
	$html = '<table border=0>';
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<td>Codigo</td>';
	$html .= '<td>Nome</td>';
	$html .= '<td>Status</td>';
	$html .= '</tr>';
	$html .= '</thead>';
	
	$pesquisar = $_POST['nome'];
	
	$chamada = "SELECT * FROM setores WHERE nome LIKE '%".$pesquisar."%' LIMIT 5";
	
	$chamada1 = mysqli_query($conexao, $chamada);
	
	while($row_set = mysqli_fetch_assoc($chamada1)){
		$html .= '<tbody >';
		$html .= '<tr><td>'.$row_set['codigo'] . "</td>";
		$html .= '<td>'.$row_set['nome'] . "</td>";
		$html .= '<td>'.$row_set['status'] . "</td></tr>";
		$html .= '</tbody>';
		}
	
	$html .= '</table>';

	
	use Dompdf\Dompdf;
	
	// include autoloader
		require_once 'dompdf/autoload.inc.php';
		
		$dompdf = new DOMPDF();
		
		$dompdf->load_html('
			<img src="imagens/logo.png" style="padding-top:18px;height:70px;"> 
			<h3 style="text_align: center;"> RELATÓRIO POR SETOR </h3>
			
			'. $html .'
		
		
		');
		//renderizar o html
		$dompdf->render();
		
		//exibir a pagina
		$dompdf->stream(
			"relatório_por_setor.pdf",
			array(
				"Attachment" => false
			)
		);
?>