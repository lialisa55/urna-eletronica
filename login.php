<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <?php
  include('navbar.php')
  ?>
    <form action="valida-login.php" method="GET" class="container mt-5">
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Código de título de eleitor</label>
          <div class="col-md-2">
            <input type="name" class="form-control" name="codigo">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
          <div class="col-md-2">
            <input type="password" class="form-control" name="senha">
          </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Entrar</button>
    </div>
    </form>
</body>
</html>