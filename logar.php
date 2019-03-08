<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include ("conexao.php");

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $query = "select login, senha from usuario where login='$login' and senha='$senha' ";

    $resultado = mysqli_query($con, $query);

    $i = 0;
    if (mysqli_num_rows($resultado) == 0) {
        echo "<h4>Não foi possível logar</h4>";
    } else {
        while ($linha = mysqli_fetch_array($resultado)) {
            //$login = $linha["login"];
            //echo $login.", você está logado!";

            $_SESSION['logado'] = $linha['login'];
            //echo $_SESSION['logado'];
            header('Location: areadoaluno.php');
        }
    }
}
mysqli_close($con);
exit;