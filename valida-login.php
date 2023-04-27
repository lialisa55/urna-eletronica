<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['codigo']) && isset($_POST['senha'])) {

    if(strlen($_POST['codigo']) == 0)

}else{

    header("Location: index.php");

    exit();

}