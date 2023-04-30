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
<?php
include('navbar.php')
?>
<<<<<<< HEAD
      <form action="valida-cadastro.php" method="GET" class="container mt-5">
=======
      <form action="valida-cadastro.php" method="GET" class="row g-3">
>>>>>>> 133c0d1422f8642d488dc0682354bc57e5cf8ad3
        <div class="col-md-6">
          <label for="name" class="form-label">Nome</label>
          <input name="nome" type="name" class="form-control">
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Senha</label>
          <input name="senha" type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Rua Cariaru, 321">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Estado</label>
          <select id="inputState" class="form-select">
            <option selected>Escolha...</option>
            <option>SP</option>
            <option>RJ</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Código</label>
          <input name="codigo" type="text" class="form-control">
        </div>
        
<<<<<<< HEAD
        <div class="col-10">
=======
        <div class="col-12">
>>>>>>> 133c0d1422f8642d488dc0682354bc57e5cf8ad3
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
      </form>
</body>
</html>