 

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<fieldset>
<legend>Lista de Registros</legend>

<table border="1" width="100%" style="
    width: 752px;
">
 <tr>
      <th>Código do Usuário</th>
      <th>Nome do Aluno</th>
      <th>Sobrenome do Aluno</th>
      <th>Senha</th>
      
      
      <th></th> 
      
 </tr>
 
<?php
    

	if(isset($_POST["consultar"])){
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $senha = $_POST['senha'];
            
                    
           
         include('conexao.php');
	
            $sqlconsultaraluno = "select * from usuario where nome='$nome' or sobrenome='$sobrenome' or senha='$senha'";     
            $consultaraluno = mysqli_query($con,$sqlconsultaraluno);
            
            
           $i = 0;
		if (mysqli_num_rows($consultaraluno) == 0){
			echo "<h4>Nenhum Registro Encontrado!</h4>";
		}
		else{
		while ($linha = mysqli_fetch_array($consultaraluno)) {
		   $cod_cliente = $linha["cod_cliente"];
                   $nome = $linha["nome"];
		   $sobrenome = $linha["sobrenome"];
                   $senha = $linha ["senha"];
		   if ($i % 2 == 0){
			  $cor = "#DDDDDD";
		   }
		   else{
			  $cor = "#FFFFFF";
		   }
         
    ?>
		<tr bgcolor="<?php echo $cor; ?>"
                    <td></td>
                    <td><?php echo $cod_cliente; ?></td>
                    <td><?php echo $nome; ?></td>
                    <td><?php echo $sobrenome; ?></td>
                    <td><?php echo $senha; ?></td>
                   
                    
                   
                    
                   
                    <td><?php echo "<a href='editar_usuario.php?id=".$linha["cod_cliente"]."'>Editar Dados</a>";?></td>

		</tr>
		 
		<?php
		   $i++;
                   
		}
	}
  
        }    
?>
</table>
    </body>
</html>