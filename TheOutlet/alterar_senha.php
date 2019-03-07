<?php


	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "theoutlet";

$id = $_SESSION['id'];


	//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);	

$senha = $_POST['senha_nova'];

$confirmacao = $_POST['confirmacao'];

if($senha == $confirmacao){

	//$nome_usuario = "Kelly";
	
	$result_usuario = "UPDATE theoutlet SET senha = '$senha' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);

	echo "senha alterada";
}else{
echo "As senhas estÃƒÂ£o diferentes";
}


?>