<?php
include_once('componentes/connect-bd.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link href="componentes/recursos/estilo.css" rel="stylesheet">
    <link href="componentes/recursos/exercicio.css" rel="stylesheet">
    <title>Teste</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <img src="componentes/imagem/logo.png" alt="Logo">
    </header>

    <nav class="navegacao">
        <a href="index.php" class="verde">Voltar</a>
    </nav>

    <main class="principal">
        <div class="conteudo">
           <h1>Teste</h1>
        </div>
    </main>
    <footer class="rodape">
        RF Consultoria/<?= date('Y'); ?>
    </footer>
</body>

</html>