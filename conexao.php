<?php
    $codigo = $_GET['codigo'];
    $nome = $_GET['nome'];
	$senha = $_GET['senha'];
	$host  = "localhost:3307";
	$user  = "root";
	$pass  = "root";
    $base  = "eleicoes";
	$con   = mysqli_connect($host, $user, $pass, $base);
?>