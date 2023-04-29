<?php 
    if(!isset($_SESSION)){
        session_start();
      };
    if(!isset($_SESSION['codigo'])){
        die("Você precisa entrar como eleitor para poder votar.");
    };
?>