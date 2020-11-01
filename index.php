<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Full Stack Eletro</title>
</head>
<body onload="carregar_saudacao()">
  <!--Menu -->
  <?php 
    include_once('menu.html') 
  ?>
  <!--Corpo -->
  <main class="container-fluid">
    <h1 class="mt-4" id="msg_abertura"></h1>
    <p class="mt-2"> Aqui em nossa loja,<em>Programadores tem desconto!</em>nos produtos para sua casa!</p>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> 
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="height: 400px; width: 700px;" src="./img/car2.jpg" class="d-block w-100 rounded" alt="Geladeira">
          </div>
          <div class="carousel-item">
            <img style="height: 400px; width: 700px;" src="./img/car1.jpg" class="d-block w-100 rounded" alt="Fogão">
          </div>
          <div class="carousel-item">
            <img style="height: 400px; width: 700px;" src="./img/car3.jpg" class="d-block w-100 rounded" alt="Programador">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </main>
  <!-- Rodapé -->
  <?php
    include('rodape.html');
  ?> 
  <script src="./js/scripts.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 
</body>
</html>