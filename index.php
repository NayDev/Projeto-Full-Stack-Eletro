<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Full Stack Eletro</title>
</head>

<script>
  function carregar_saudacao(){
    data = new Date();
    hora = data.getHours();

    if(hora < 12){
      document.getElementById("msg_abertura").innerHTML = "Bom dia!!! Seja Bem vindo(a)";
    } else if(hora < 18){
      document.getElementById("msg_abertura").innerHTML = "Bom tarde!!! Seja Bem vindo(a)";
    } else{
      document.getElementById("msg_abertura").innerHTML = "Boa noite!!! Seja Bem vindo(a)";
    }
  }
</script>

<body onload="carregar_saudacao()">
    <!--Menu -->
    <?php include_once('menu.php') ?>
    <main>
        <h1 id="msg_abertura"></h1>
        <p>Aqui em nossa loja,<em>Programadores tem desconto!</em>nos produtos para sua casa!</p>
    </main>

    <footer id="rodape">
        <p id="formas_pagamento">Formas de pagamento:</p>
        <img src="./img/pagamentos-bandeiras-01.png" alt="Formas de Pagamento" />
        <p>&copy; Recode Pro 2020</p>
    </footer>
</body>

</html>