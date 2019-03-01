<?php

if (isset($_POST["cadastrar"])) {
    $nome = $_POST["nome"];
    $sobrenome =$_POST["sobrenome"];
    $tipologradouro =$_POST["tipo_logradouro"];
    $logradouro =$_POST ["logradouro"];
    $usuario =$_POST ["usuario"];
    $senha =$_POST ["senha"];
    $rg =_POST ["rg"];
   
    
        
     
    include("conexao.php");
    
    $sqlcadendereco = "insert into endereco (cod_end,tipo_logradouro,logradouro)
            values(null,'".$tipologradouro."','".$logradouro."')";  
    
    $sqlcadcliente = "insert into cliente (nome, sobrenome, usuario, senha, cod_end, rg) values
            ('".$nome."','".$sobrenome."','".$usuario."','".$senha."', '".$rg."', LAST_INSERT_ID())";
    
    if(mysqli_query($con, $sqlcadendereco)){
      if(mysqli_query($con, $sqlcadcliente)){
        echo "Cadastro efetuado com sucesso!";
    }else{
        echo "Não foi possível efetuar o cadastro";
    }
    }
}
?>
