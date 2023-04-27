<?php 
include('conexao.php');
$senha = $_GET['senha'];
$codigo = $_GET['codigo'];
session_start(); 

if (isset($_POST['codigo']) && isset($_POST['senha'])) {

    if(strlen($_GET['codigo']) == null){
        echo "Preencha seu email";
    }
    else if (strlen($_GET['senha']) == null){
        echo "Preencha sua senha";
    }
    else{
        $sql_code = "SELECT * FROM usuarios WHERE codigo = '$codigo' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                    session_start();
            }

            $_SESSION['codigo'] = $usuario['codigo'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: index.php");
        }
        
        else {
            echo "Código de eleitor ou senha incorretos";
        }
    }

}else{

    header("Location: index.php");

    exit();

}
mysqli_close($con);
?>