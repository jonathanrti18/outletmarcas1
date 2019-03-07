<?php	

	include_once("conexao.php");
	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Nome</th>';
	$html .= '<th>Sobrenome</th>';
	$html .= '<th>Logradouro</th>';
	$html .= '<th>Tipo Logradouro</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	//$result_aluno = "select * from usuario a join endereco e on a.cod_cliente = e.cod_end where nome='$nome' or sobrenome='$sobrenome'";
	$result_usuario = "select * from usuario A, endereco E
                 where a.cod_end=e.cod_end";
        $resultado_usuario = mysqli_query($con, $result_usuario);
	while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
		$html .= '<tr><td>'.$row_usuario['cod_cliente'] . "</td>";
		$html .= '<td>'.$row_usuario['nome'] . "</td>";
		$html .= '<td>'.$row_usuario['sobrenome'] . "</td>";
		$html .= '<td>'.$row_usuario['logradouro'] . "</td>";
                $html .= '<td>'.$row_usuario['tipo_logradouro'] . "</td>"; "</td></tr>";		
	}
	
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Informações completas dos usuarios</h1>
			'. $html .'
		');

        ob_clean();
        
	//Renderizar o html
	$dompdf->render();

	//Exibibir a pÃ¡gina
	$dompdf->stream(
		"inf_cliente", 
		array(
			"Attachment" => true //Para realizar o download somente alterar para true
		)
	);
?>