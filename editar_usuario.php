<html>
	<head>
		<title>Editar registro de usuario</title>
		<meta charset='utf-8'/>

  
	</head>

	<body>
<?php


    include('conexao.php');

    $cod = $_GET['id'];
    echo $cod;

   echo "<b>Editando o usuario de código ".$cod."</b></br></br>";

    $query ="SELECT * FROM usuario WHERE cod_cliente = $cod";
    
    $result = mysqli_query($con,$query);
 

    if ($result->num_rows > 0) {
        echo "<form method='post' action='edit_usuario_conf.php'>";
        while($linha = mysqli_fetch_array($result)) {

        	echo "<label>nome do usuario:</label><input required type='text' name='nome' value='".$linha["nome"]."'></input><br>";
        	echo "<label>sobrenome do usuario:</label><input type='text' name='sobrenome' value='".$linha["sobrenome"]."'></input><br>";
        	
        	echo "<label>Código do usuario:</label><input  type='text' name='cod_cliente' readonly='readonly' value='".$linha["cod_cliente"]."'></input><br>";
        	echo "<input type='submit' value='salvar'></input>";
                
               

        }
            echo "</form>";
    } else {
        echo "<b class='erro'>Sem resultados para mostrar</b><br><br>";
    }




?>


</body>
</html>
