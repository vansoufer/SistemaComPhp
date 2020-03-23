<?php
require ("menutec1.php");
?>

<?php


	include_once("conexao.php");
	
	
	$html = '<table border=1>';
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<td>Codigo</td>';
	$html .= '<td>Nome</td>';
	$html .= '<td>Data</td>';
	$html .= '<td>Setor</td>';
	$html .= '<td>Data Fabr.</td>';
	$html .= '<td>Garantia</td>';
	$html .= '<td>Descrição</td>';
	$html .= '</tr>';
	$html .= '</thead>';
	

		$di = $_POST["dti"];
		$df = $_POST["dtf"];
		$nome = $_POST["nomeequip"];
			
			$pesquisar = $_POST['dti'];
			
				while ($pesquisar<=$df){
				if ('nome' == $nome){	
				$chamada = "SELECT * FROM equipamentos WHERE dtcompra LIKE '%".$pesquisar."%' LIMIT 5";	
				$chamada1 = mysqli_query($conexao, $chamada);
					while($row_equip = mysqli_fetch_array($chamada1)){
				
						$html .= '<tbody >';
						$html .= '<tr><td>'.$row_equip['codigo'] . "</td>";
						$html .= '<td>'.$$row_equip['nome'] . "</td>";
						$html .= '<td>'.$$row_equip['dtcompra'] . "</td>";
						$html .= '<td>'.$$row_equip['setor'] . "</td>";
						$html .= '<td>'.$$row_equip['dtfabricacao'] . "</td>";
						$html .= '<td>'.$$row_equip['garantia'] . "</td>";
						$html .= '<td>'.$$row_equip['descricao'] . "</td></tr>";
						$html .= '</tbody>';
						}
				}
				else {
				echo "Nenhum registro encontrado"}
				$pesquisar ++;
				}
				
	$html .= '</table>';
use Dompdf\Dompdf;
	// include autoloader
		require_once 'dompdf/autoload.inc.php';
		
		$dompdf = new DOMPDF();
		
		$dompdf->load_html('
			<img src="imagens/logo.png" style="padding-top:18px;height:70px;"> 
			<h3 style="text_align: center;"> RELATÓRIO DE EQUIPAMENTOS </h3>
			
			
			'. $html .'
		
		
		');
		//renderizar o html
		$dompdf->render();
		
		//exibir a pagina
		$dompdf->stream(
			"relatório_equipamentos.pdf",
			array(
				"Attachment" => false
			)
		);
?>