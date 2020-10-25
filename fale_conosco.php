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
    <title>Fale Conosco - Full Stack Eletro</title>
</head>

<body>
    <?php include_once('menu.php') ?>
    <header>
        <h1>Fale conosco</h1>
    </header>
    <hr/>

    <section class="fale_conosco">
        <div class="box_fale_conosco">
            <img id="email" src="./img/email.jpg">
            <p class="descricao">contato@fullstackeletro.com</p>
        </div>

        <div class="box_fale_conosco">
            <img id="whats" src="./img/whatsapp.png">
            <p class="descricao">(11) 99999-99999</p>
        </div>

    </section>
    <div class="formulario">
        <form method="post" action=""> 
            <h4>Nome </h4>
            <input type="text" name="nome" style="width: 400px;" placeholder="Digite seu Nome">
            <h4>Mensagem </h4>
            <textarea name="msg" style="width: 400px;" placeholder="Digite uma mensagem"></textarea>
            <br/><br/>
            <input id="button" type="submit" name="submit" value="Enviar">
        </form>

        <?php
                $sql = "select * from comentarios";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
                        echo "Data: ", $rows['data'], "<br />";
                        echo "Nome: ", $rows['nome'], "<br />";
                        echo "Mensagem: ", $rows['msg'], "<br />";
                        echo "<hr />";
                }
                }else{
                    echo "Nenhum comentário ainda!!!";
                }
            ?>         
    </div>

    <footer id="rodape">
        <p id="formas_pagamento">Formas de pagamento:</p>
        <img src="./img/pagamentos-bandeiras-01.png" alt="Formas de Pagamento">
        <p>&copy; Recode Pro 2020</p>
    </footer>
</body>

</html>