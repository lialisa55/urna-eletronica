<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Urna Eletrônica</title>
</head>
<body>
<?php
include('navbar.php')
?>
      <?php

$host  = "localhost:3307";
$user  = "root";
$pass  = "root";
  $base  = "eleicoes";
$con   = mysqli_connect($host, $user, $pass, $base);

echo "<br>";
echo "Conexao Ok";

mysqli_close($con);
?>
</body>
</html>