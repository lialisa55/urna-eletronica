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
      if(!isset($_SESSION)){
        session_start();
      };
include('navbar.php');

$user = !empty($_SESSION['nome']) ? $_SESSION['nome']: 'Usuário';

?>
<?PHP echo "<h1>Bem vindo às eleições 2023, $user</h1>";?>

</br>  </br></br>  </br>


</body>
</html>