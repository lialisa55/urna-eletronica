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
<h1 class="row-3"> Seu voto para deputado estadual </h1>
<div class="container fluid">
  <div class="row">
    <form action="" method="POST" class="col-3 mt-5 mx-auto">
      <div class="row">
        <div class="col my-1">
          <label for="inputZip" class="form-label">Código</label>
          <input name="codigo" type="text" class="form-control" id='codigo'>
        </div>
        <div class="col my-1">
          <button type="submit" class="btn btn-primary">Pesquisar</button>
        </div>
      </div>
  
      <div class="row">
        <div class="col my-1">
            <label for="nome-candidato" class="form-label">Nome</label>
            <input name="nome" type="text" class="form-control" id='nome' >
        </div>
      </div>
      <div class="row">
        <div class="col my-1">
            <label for="inputZip" class="form-label">Partido</label>
            <input name="partido" type="text" class="form-control" id='partido' >
        </div>
      </div>
      <div class="row">
        <div class="col-10">
            <button type="submit" class="btn btn-primary my-3">Votar</button>
        </div>
      </div>
    </form>
    <div class='col-3 mt-5 mx-auto'>
      <img src="" class="img-thumbnail" id='img' width="250px"/>
    </div>
    <div class='col-3 mt-5 mx-auto'>
      <h5>Cola eleitoral</h5>
      <p>40999 - Abdul Jarour/PSB</p>
      <p>35735 - Campos/PMB</p>
      <p>10110 - Abelardo/REPUBLICANOS</p>
      <p>40321 - Abidan Henrique/PSB</p>
    </div>
  </div>
</div>

<?PHP  
if(isset($_POST['codigo'])){
  if(empty($_POST['codigo'])){
    echo "<script>alert('Digite o número do candidato')</script>";
  }else{
    $codigo = $con->real_escape_string($_POST['codigo']);
    $print = mysqli_fetch_array($con->query("SELECT codigo, nome, partido, imagem from tb_deputadoE WHERE codigo = $codigo;"));

      echo "<script> document.getElementById(\"nome\").value = '" . $print['nome'] . "';document.getElementById(\"codigo\").value = '" . $print['codigo'] . "'; document.getElementById(\"img\").src = '" . $print['imagem'] . "'; document.getElementById(\"partido\").value = '" . $print['partido'] . "';</script>";    
  } 
}
if(isset($_POST['nome']) && isset($_POST['partido']) && isset($_POST['codigo'])){
        
    if(empty($_POST['nome']) || empty($_POST['partido']) || empty($_POST['codigo'])){
        die();
    }else{
        $codigo = $con->real_escape_string($_POST['codigo']);
        $nome = $con->real_escape_string($_POST['nome']);
        $partido = $con->real_escape_string($_POST['partido']);
        
        
        $select = mysqli_fetch_array($con->query("SELECT votos from tb_deputadoE where codigo = $codigo;"));
  
        $con->query("UPDATE tb_deputadoE set votos = ". $select['votos'] + 1 ." WHERE codigo = $codigo;");
  
        echo('<script> window.location.replace("senador.php");</script>');
        echo "<script>alert('Voto computado');</script>";
  
    }
  }
  
  ?>
