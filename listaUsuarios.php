<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
<?PHP

include "conexao.php";
include "navbar.php";
echo "</br></br></br></br></br></br>";
$res2 = mysqli_query($con,"SELECT * FROM tb_eleitor;");
		echo "<center><table border=''><tr><td>Nome do Usuário</td><td>Titulo de Eleitor</td><td>Email</td><td>Endereço</td><td>Estado</td><td>Cidade</td></tr>";

		/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
		while($escrever=mysqli_fetch_array($res2)){

			/*Escreve cada linha da tabela*/
			echo "<tr><td>" . $escrever['nome'] . "</td><td>" . $escrever['titulo'] . "</td><td>" . $escrever['email'] . "</td><td>" . $escrever['endereco'] . "</td><td>" . $escrever['estado'] . "</td><td>" . $escrever['cidade'] . "</td></tr>";

		}/*Fim do while*/

		echo "</center></table>"; /*fecha a tabela apos termino de impressão das linhas*/

		echo "</br></br>";
        ?>
</body>