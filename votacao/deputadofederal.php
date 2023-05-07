<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Deputado federal</title>
</head>

<?php
    include ('../conexao.php');
    include ('../limitacao.php');
    include ('navbarvotacao.php');
?>
<div class="container fluid">
  <div class="row">
    <form action="valida-cadastro.php" method="GET" class="col-3 mt-5 mx-auto">    
      <div class="row">
        <div class="col my-1">
          <label for="inputZip" class="form-label">Código</label>
          <input name="numero" type="text" class="form-control">
        </div>
        <div class="col my-1">
          <button type="search" class="btn btn-primary">Pesquisar</button>
        </div>
      </div>
      <div class="row">
        <div class="col my-1">
            <label for="nome-candidato" class="form-label">Nome</label>
            <input name="nome-candidato" type="text" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col my-1">
            <label for="inputZip" class="form-label">Partido</label>
            <input name="numero" type="text" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-10">
            <button type="submit" class="btn btn-primary my-3">Registrar</button>
        </div>
      </div>
    </form>
    <div class='col-3 mt-5 mx-auto'>
      <img src="coelho-de-estimacao-2.jpg" class="img-thumbnail" width="250px"/>
    </div>
    <div class='col-3 mt-5 mx-auto'>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ullamcorper massa vitae nulla bibendum vulputate. Maecenas porta dignissim mauris. Maecenas vitae sapien varius nibh porttitor elementum. Phasellus porta eu odio sit amet pellentesque. In maximus at nunc sit amet efficitur. Sed vitae tincidunt nisl, et convallis elit. Mauris id lobortis sem, sed tincidunt tortor. Nam ullamcorper vehicula sodales.</p>
    </div>
  </div>
</div>