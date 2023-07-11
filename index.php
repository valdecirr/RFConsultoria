<?php
include_once('componentes/connect-bd.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link href="componentes/recursos/estilo.css" rel="stylesheet">
    <title>RF Consultoria</title>
</head>

<body>
    <header class="cabecalho">
        <img src="componentes/imagem/logo.png" alt="Logo">
    </header>

    <main class="principal">
        <div class="conteudo">
            <a href="tabela_atividade.php">Tabela</a>
        </div>
    </main>
    <footer class="rodape">
        RF Consultoria/<?= date('Y'); ?>
    </footer>
</body>

</html>