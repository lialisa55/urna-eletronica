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
<form>
  <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputName">Name</label>
      <input type="text" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">
    </div>
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
      </div>
    </div>
    <div class="col-auto my-1">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
        <label class="form-check-label" for="autoSizingCheck2">
          Remember me
        </label>
      </div>
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<form action="valida-cadastro.php" method="GET" class="container mt-5">
    
    <div class="col-md-2">
        <div class="form-row align-items-center md-2">
            <label for="inputZip" class="form-label">Código</label>
            <input name="numero" type="text" class="form-control">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <div class="col-md-2">
        <label for="nome-candidato" class="form-label">Nome</label>
        <input name="nome-candidato" type="text" class="form-control">
    </div>
    <div class="col-md-2">
        <label for="inputZip" class="form-label">Partido</label>
        <input name="numero" type="text" class="form-control">
    </div>
    <div class="col-10">
        <button type="submit" class="btn btn-primary my-3">Registrar</button>
    </div>
</div>
</form>