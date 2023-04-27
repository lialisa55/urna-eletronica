<?php 
include('conexao.php')
session_start(); 

include "db_conn.php";

if (isset($_POST['codigo']) && isset($_POST['senha'])) {

    if(strlen($_GET['codigo']) == 0){
        echo "Preencha seu email";
    }
    else if (strlen($_GET['senha']) == 0){
        echo "Preencha sua senha"
    }
    else{
        $email = $
    }

}else{

    header("Location: index.php");

    exit();

}