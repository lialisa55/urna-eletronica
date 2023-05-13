<?php 
    if(!isset($_SESSION)){
        session_start();
      };
    if(!isset($_SESSION['titulo'])){
        include "navbar.php";
        die("</br></br></br></br></br><center><h1>Você precisa entrar como eleitor para poder votar.</h1></center>");
    };
?>