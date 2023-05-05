<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Deputado estadual</title>
</head>

<?php
    include ('../conexao.php');
    include ('../limitacao.php');
    include ('navbarvotacao.php');
?>

<form action="valida-cadastro.php" method="GET" class="container mt-5">    
    <div class="col-sm-3 my-1">
      <label for="inputZip" class="form-label">Código</label>
      <input name="numero" type="text" class="form-control">
    </div>
    <div class="col-10">
        <button type="search" class="btn btn-primary my-3">Pesquisar</button>
    </div>
    <div class="col-sm-3 my-1">
        <label for="nome-candidato" class="form-label">Nome</label>
        <input name="nome-candidato" type="text" class="form-control">
    </div>
    <div class="col-sm-3 my-1">
        <label for="inputZip" class="form-label">Partido</label>
        <input name="numero" type="text" class="form-control">
    </div>
    <div class="col-10">
        <button type="submit" class="btn btn-primary my-3">Registrar</button>
    </div>
</form>

<div class="container mt-5">
  <img source="coelho-de-estimacao-2.jpg" class="img-fluid"/>
  <?php

  ?>
</div>