<meta charset="utf-8"> 
<?php
#Faz a conexão com o Banco de Dados
	include('conexao.php');
#Verifica se nome foi definido e se não está vazio
if(isset($_GET['nome']) &&  isset($_GET['titulo']) && isset($_GET['senha'])  && isset($_GET['email']) &&  isset($_GET['endereco']) && isset($_GET['cidade'])){
#Verifica se titulo não está vazio
	if(empty($_GET['titulo'])){
#se foi definido no método GET atribuo a uma váriavel chamada titulo e faço a remoção de ', " entre outros simbolos que podem afetar o código ou o Banco de Dados
		echo "<script>alert('Digite seu Titulo')</script>";
	}else if(empty($_GET['senha'])){
		echo "<script>alert('Digite sua senha')</script>";
	}else if(empty($_GET['email'])){
		echo "<script>alert('Digite seu email')</script>";
	}else if(empty($_GET['cidade'])){
		echo "<script>alert('Digite sua cidade')</script>";
	}else if(empty($_GET['estado'])){
		echo "<script>alert('Digite sua estado')</script>";
	}else if(empty($_GET['endereco'])){
		echo "<script>alert('Digite seu endereço')</script>";
	}else{
		#se foi definido no método GET atribuo a uma váriavel chamada nome e faço a remoção de ', " entre outros simbolos que podem afetar o código ou o Banco de Dados
		$nome = $con->real_escape_string($_GET['nome']);
		#se foi definido no método GET atribuo a uma váriavel chamada titulo e faço a remoção de ', " entre outros simbolos que podem afetar o código ou o Banco de Dados
		$titulo = $con->real_escape_string($_GET['titulo']);
		$senha = $con->real_escape_string($_GET['senha']);
		$email = $con->real_escape_string($_GET['email']);
		$endereco = $con->real_escape_string($_GET['endereco']);
		$estado = $con->real_escape_string($_GET['estado']);
		$cidade = $con->real_escape_string($_GET['cidade']);
		
		
		$res = mysqli_query($con,"INSERT INTO tb_eleitor(titulo, nome, senha, email, endereco, cidade, estado) VALUES('$titulo','$nome','$senha', '$email', '$endereco', '$cidade', '$estado')"); 
		echo ("<script>alert('Cadastro realizada com sucesso!')</script>");  
		
		mysqli_close($con);
		}
		}
	
	
?>
