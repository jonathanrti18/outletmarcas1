<html>
	<head>
		<title></title>
		<meta charset='utf-8'/>
	</head>

	<body>
           
<?php


    include('conexao.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $senha = $_POST ['senha'];
    $cod = $_POST['cod_cliente'];

    echo "Nome: ".$nome."</br>Sobrenome: ".$sobrenome." <br> Senha: ".$senha."</br></br>";

    $adc = "UPDATE usuario SET nome='$nome', sobrenome='$sobrenome' , senha='$senha' WHERE cod_cliente='$cod'"; 

    $ins = mysqli_query($con,$adc);

    if($ins)
    {
    echo "<b style='color:green'>Usuário editado com sucesso!</b> </br><a href='areadoaluno.php'>Voltar</a>";

    }
    else
    {
    echo "Erro </br><a href='areadoaluno.php'>Voltar</a>";

    }
    
    
?>
	</body>
</html>
