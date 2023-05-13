<?PHP
    include "conexao.php";
    if(isset($_POST['nome']) && isset($_POST['partido']) && isset($_POST['codigo'])){
        
        if(empty($_POST['nome']) && empty($_POST['partido']) && empty($_POST['codigo'])){
            
            echo "<script>alert('Digite um número de candidato válido')</script>";
        }else{
            $codigo = $con->real_escape_string($_POST['codigo']);
            $nome = $con->real_escape_string($_POST['nome']);
            $partido = $con->real_escape_string($_POST['partido']);
            
       #<input name="table" value='tb_deputadoF' stylesheet="opacity=0">
            #$table = $_POST['table'];
            #echo $table;
            
            $select = mysqli_fetch_array($con->query("SELECT votos from tb_deputadoF where codigo = $codigo;"));

            $con->query("UPDATE tb_deputadoF set votos = ". $select['votos'] + 1 ." WHERE codigo = $codigo;");

            echo "<script>alert('Voto computado');</script>";
            header("Location: ./votacao/depultadoestadual.php");

        }
    }

?>