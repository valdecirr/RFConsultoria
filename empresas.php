<?php
include_once('connect-bd.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.5/datatables.min.css" rel="stylesheet" />
       
    <link href="recursos/estilo.css" rel="stylesheet">
    <link href="recursos/exercicio.css" rel="stylesheet">
    <title>Teste</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <img src="imagem/logo.png" alt="Logo">
    </header>

    <nav class="navegacao">
        <a href="index.php" class="verde">Voltar</a>
        <a href="indicador.php">Dashbord</a>
        <a href="criarempresa.php">Nova Empresa</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
            echo "<table border='1' class='table display' id='tabelaempresas'>";
            echo "<tr>";
            echo "<th>Nome</th>";
            echo "<th>Quantidade</th>";
            echo "</tr>";
            echo "<tbody>";
            $sql1 = "SELECT * FROM empresa";
            $sql2 = "SELECT * FROM rf_consultoria;";
            $result1 = mysqli_query($conn, $sql1);
            $result2 = mysqli_query($conn, $sql2);
            while ($row1 = mysqli_fetch_assoc($result1)) {
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    if ($row1['Nome'] == $row2['Empresa']) {
                        $soma++;
                    }
                }
                echo "<tr>";
                echo "<td><a href='tabela_atividade.php?id=" . $row1['Nome'] . "'>" . $row1['Nome'] . "</a></td>";
                echo "<td>" . $soma . "</td>";
                echo "</tr>";
                $soma = 0;
            }

            echo "</tbody>";
            echo "</table>";
            mysqli_close($conn);
            ?>
        </div>
    </main>
    <footer class="rodape">
        RF Consultoria/<?= date('Y'); ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.5/datatables.min.js"></script>

</body>


</html>