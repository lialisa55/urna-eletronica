<meta charset="utf-8"> 
<?php

    $codigo = $_GET['codigo'];
    $nome = $_GET['nome'];
	$host  = "localhost:3306";
	$user  = "root";
	$pass  = "";
    $base  = "pw2";
	$con   = mysqli_connect($host, $user, $pass, $base);
	
	
	
	$res = mysqli_query($con,"INSERT INTO tb_eleitor(id, nome, email) VALUES($codigo,'$nome')"); 
	echo ("Cadastro realizada com sucesso!");
    
	
	$res2 = mysqli_query($con,"SELECT * FROM tb_eleitor;");
echo "<table border=3px><tr><td>Nome do Usuário</td><td>Email</td></tr>";

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res2)){

/*Escreve cada linha da tabela*/
echo "</td><td>" . $escrever['nome'] . "</td><td>" . $escrever['email'] . "</td></tr>";

}/*Fim do while*/

echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/

echo "</br></br>";
mysqli_close($con);
?>
