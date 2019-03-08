<html>
	<head>
		<title>Editar registro de aluno</title>
		<meta charset='utf-8'/>

  
	</head>

	<body>
<?php


    include('conexao.php');

    $cod = $_GET['id'];
    echo $cod;

   echo "<b>Editando o aluno de código ".$cod."</b></br></br>";

    $query ="SELECT * FROM usuario WHERE cod_cliente = $cod";
    
    $result = mysqli_query($con,$query);
 

    if ($result->num_rows > 0) {
        echo "<form method='post' action='edit_usuario_conf.php'>";
        while($linha = mysqli_fetch_array($result)) {

        	echo "<label>Nome do Cliente:</label><input required type='text' name='nome' value='".$linha["nome"]."'></input><br>";
        	echo "<label>Sobrenome do Cliente:</label><input type='text' name='sobrenome' value='".$linha["sobrenome"]."'></input><br>";
                echo "<label>Senha:</label><input type='text' name='senha' value='".$linha["senha"]."'></input><br>";
        	
        	echo "<label>Código do aluno:</label><input  type='text' name='cod_cliente' readonly='readonly' value='".$linha["cod_cliente"]."'></input><br>";
        	echo "<input type='submit' value='salvar'></input>";

        }
            echo "</form>";
    } else {
        echo "<b class='erro'>Sem resultados para mostrar</b><br><br>";
    }




?>


</body>
</html>
