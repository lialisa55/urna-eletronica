<?php 
include('conexao.php');
<<<<<<< HEAD

if (isset($_GET['codigo']) && isset($_GET['senha'])) {
=======
session_start(); 

if (isset($_POST['codigo']) && isset($_POST['senha'])) {
>>>>>>> 133c0d1422f8642d488dc0682354bc57e5cf8ad3

    if(strlen($_GET['codigo']) == null){
        echo "Preencha seu email";
    }
    else if (strlen($_GET['senha']) == null){
        echo "Preencha sua senha";
    }
    else{

<<<<<<< HEAD
        $codigo = $_GET['codigo'];
        $senha = $_GET['senha'];
        $sql_code = "SELECT * FROM tb_eleitor WHERE codigo = '$codigo' AND senha = '$senha'";
        $sql_query = $con->query($sql_code) or die($con->error);
=======
        $codigo = $mysqli->real_escape_string($_GET['codigo']);
        $senha = $mysqli->real_escape_string($_GET['senha']);
        $sql_code = "SELECT * FROM usuarios WHERE codigo = '$codigo' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
>>>>>>> 133c0d1422f8642d488dc0682354bc57e5cf8ad3

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                    session_start();
<<<<<<< HEAD
            };
=======
            }
>>>>>>> 133c0d1422f8642d488dc0682354bc57e5cf8ad3

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