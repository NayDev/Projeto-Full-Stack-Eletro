<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "fseletro";

  //Criando conexão
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Verificando conexão
  if(!$conn){
    die("A conexão ao Banco falhou: " .mysqli_connect_error());
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Nossas lojas - Full Stack Eletro</title>
</head>
<body>
  <?php include_once('menu.html') ?>
  <header>
      <h1 class="">Nossas lojas</h1>
  </header>
  <hr/>
  <section class="container my-5">
    <div class="row flex-column flex-sm-row align-items-center">

    
    <?php
      $sql = "select * from lojas";
      $result = $conn->query($sql);

      if($result->num_rows > 0){
        while($rows = $result->fetch_assoc()){
    ?>
          <div class="col text-center my-4">
            <h3><?php echo $rows["cidade"]; ?></h3>
            <p><?php echo $rows["endereco"]; ?></p>
            <p><?php echo "Número ", $rows["numero"]; ?></p>
            <p><?php echo $rows["andar"],"º andar" ?></p>
            <p><?php echo $rows["bairro"]; ?></p>
            <p><?php echo $rows["telefone"]; ?></p>
          </div>
    <?php
        }
      }else{
        echo "Nenhum produto cadastrado!!!";
      }
    ?>    
    </div>
  </section>
  <?php
    include('rodape.html');
  ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>