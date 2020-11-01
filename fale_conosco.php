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

  if(isset($_POST['nome']) && isset($_POST['msg'])){
      $nome = $_POST['nome'];
      $msg = $_POST['msg'];

      $sql = "insert  into comentarios (nome, msg) values ('$nome','$msg')";
      $result = $conn->query($sql);
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Fale Conosco - Full Stack Eletro</title>
</head>
<body>
  <?php include_once('menu.html') ?>
  <header>
    <h1 class="mt-4">Fale conosco</h1>
  </header>
  <hr/>
  <section class="container-fluid">
    <div class="contato">
      <img class="img-fluid" src="./img/email.png" id="email">
        <p class="">contato@fullstackeletro.com</p>
        <img class="img-fluid" src="./img/whats.svg" id="whats">
        <p class="">(11) 99999-99999</p>
    </div>
  </section>

  <form class="container" method="post">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nome" placeholder="Digite seu nome">
    </div>
    <div class="form-group">
      <label for="msg">Mensagem</label>
      <textarea type="password" name="msg" class="form-control" id="msg" placeholder="Digite sua Mensagem"></textarea>
    </div>
      <button type="submit" name="submit"  value="Enviar" class="btn btn-primary">Enviar</button>
  </form>
  <h2 class="mt-4 text-center">Lista de Mensagem</h2>
    <table class=" container table">
      <thead class="table-dark">
        <tr>
          <th scope="col">Data</th>
          <th scope="col">Nome</th>
          <th scope="col">Mensagem</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
            $sql = "select * from comentarios";
            $result = $conn->query($sql);
            
            if($result->num_rows > 0){
              while($rows = $result->fetch_assoc()){
          ?>
                <th scope="row"><?php echo date('d/m/Y', strtotime($rows['data']));?></th>
                <td scope="row"><?php echo $rows['nome']?></td>
                <td scope="row"><?php echo $rows['msg']?></td>
        </tr>
            <?php
              }
            }else{
              echo "Nenhum comentário ainda!!!";
            }
            ?> 
        </tbody>
    </table>
    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script>        
    <?php 
      include('rodape.html');
    ?>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>