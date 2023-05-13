<?php 
include('conexao.php');

if (isset($_GET['titulo']) && isset($_GET['senha'])) {

    if(strlen($_GET['titulo']) == null){
        echo "Preencha seu titulo";
    }
    else if (strlen($_GET['senha']) == null){
        echo "Preencha sua senha";
    }
    else{

        $titulo = $_GET['titulo'];
        $senha = $_GET['senha'];
        $sql_code = "SELECT * FROM tb_eleitor WHERE titulo = '$titulo' AND senha = '$senha'";
        $sql_query = $con->query($sql_code) or die("Erro no Banco de Dados");

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                    session_start();
            };

            $_SESSION['titulo'] = $usuario['titulo'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: index.php");
        }
        
        else {
            echo "Código de eleitor ou senha incorretos";
            echo "</br><a href=\"index.php\">Aperte aqui para voltar para a home<a>";
        }
    }

}else{

    header("Location: index.php");

    exit();

}
mysqli_close($con);
?>