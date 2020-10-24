<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Nossas lojas - Full Stack Eletro</title>
</head>

<body>
    <?php include_once('menu.php') ?>
    <header>
        <h1>Nossas lojas</h1>
    </header>
    <hr/>

    <section class="lojas">
        <div class="box_lojas">
            <h3>Rio de Janeiro</h3>
            <p>Avenida Presidente Vargas, 5000</p>
            <p>10 &ordm; andar</p>
            <p>Centro</p>
            <p>(21) 3333-3333</p>
        </div>
        <div class="box_lojas">
            <h3>São Paulo</h3>
            <p>Avenida Paulista, 985</p>
            <p>3 &ordm; andar</p>
            <p>Jardins</p>
            <p>(11) 4444-4444</p>
        </div>
        <div class="box_lojas">
            <h3>Santa Catarina</h3>
            <p>Rua Major &Aacute;vila, 370</p>
            <p>Vila Mariana</p>
            <p>(47) 5555-5555</p>
        </div>
    </section>
    <br/><br/>

    <footer id="rodape">
        <p id="formas_pagamento">Formas de pagamento:</p>
        <img src="./img/pagamentos-bandeiras-01.png" alt="Formas de Pagamento" />
        <p>&copy; Recode Pro 2020</p>
    </footer>
</body>

</html>