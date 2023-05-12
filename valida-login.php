<?php 
include('conexao.php');

if (isset($_GET['codigo']) && isset($_GET['senha'])) {

    if(strlen($_GET['codigo']) == null){
        echo "Preencha seu email";
    }
    else if (strlen($_GET['senha']) == null){
        echo "Preencha sua senha";
    }
    else{

        $codigo = $_GET['codigo'];
        $senha = $_GET['senha'];
        $sql_code = "SELECT * FROM tb_eleitor WHERE codigo = '$codigo' AND senha = '$senha'";
        $sql_query = $con->query($sql_code) or die($con->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                    session_start();
            };

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