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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/styles.css" />
    <script src="./js/scripts.js"></script>
    <title>Produtos - Full Stack Eletro</title>
</head>

<body>
    <?php include_once('menu.php') ?>
    <header>
        <h1>Produtos</h1>
    </header>
    <hr/>
    <!--Iniciando os Produtos-->
    <main class="pagProdutos">
        <section class="categorias">
            <h3>Categorias</h3>
            <ul>
                <li onclick="exibirTodos('todos')">Todos(12)</li>
                <li onclick="exibirCategoria('geladeira')">Geladeiras(3)</li>
                <li onclick="exibirCategoria('fogao')">Fogões(2)</li>
                <li onclick="exibirCategoria('microondas')">Microondas(3)</li>
                <li onclick="exibirCategoria('lavadoraDeRoupas')">Lavadora de Roupas(2)</li>
                <li onclick="exibirCategoria('lavaLoucas')">Lava Louças(2)</li>
            </ul>
        </section>

        <section class="produtos">
            <?php
                $sql = "select * from produtos";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
                        
            ?>
             <div class="box_produto" style="display: block;" id="<?php echo $rows["categoria"]; ?>" >
                <div class="box_img">
                    <img src="<?php echo $rows["imagem"]; ?>" alt="Geladeira 540 Litros" width="150px" onclick="destaque(this)">
                </div>
                <br/>
                <p class="descricao"><?php echo $rows["descricao"]; ?></p>
                <hr/>
                <p class="antigo">R$ <?php echo $rows["preco"]; ?></p>
                <p class="preco">R$ <?php echo $rows["precofinal"]; ?></p>
            </div>
            <?php
                    }
                }else{
                    echo "Nenhum produto cadastrado!!!";
                }
            ?>            
           
        </section>
    </main>
    <br/><br/><br/>
    <br/>
    <footer id="rodape">
        <p id="formas_pagamento">Formas de pagamento:</p>
        <img src="./img/pagamentos-bandeiras-01.png" alt="Formas de Pagamento">
        <p>&copy; Recode Pro 2020</p>
    </footer>
</body>

</html>