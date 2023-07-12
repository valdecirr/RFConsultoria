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
    </nav>

    <main class="principal">
        <div class="conteudo">
            <table class="table display" id="listaatividade">
                <thead>
                    <tr>
                        <th>Editar</th>
                        <th>Nome</th>
                        <th>Dias</th>
                        <th>Inicio</th>
                        <th>CheckInicio</th>
                        <th>InicioReal</th>
                        <th>Termino</th>
                        <th>CheckFinal</th>
                        <th>FinalReal</th>
                        <th>Status</th>
                        <th>OBS</th>                        
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php
                    $sql = "SELECT * FROM rf_consultoria";
                    $result = mysqli_query($conn, $sql);
                    echo mysqli_num_rows($result) . " registros encontrados.";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td><a href='editar.php?id=" . $row['ID'] . "'>Editar</a></td>";
                        echo "<td>" . $row['Nome'] . "</td>";
                        echo "<td class='alinhar'>" . $row['Dias'] . "</td>";
                        echo "<td>" . $row['Inicio'] . "</td>";
                        echo "<td class='alinhar'>" . $row['CheckInicio'] . "</td>";
                        echo "<td>" . $row['InicioReal'] . "</td>";
                        echo "<td>" . $row['Termino'] . "</td>";
                        echo "<td class='alinhar'>" . $row['CheckFinal'] . "</td>";
                        echo "<td>" . $row['FinalReal'] . "</td>";
                        echo "<td>" . $row['Status'] . "</td>";
                        echo "<td>" . $row['OBS'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer class="rodape">
        RF Consultoria/<?= date('Y'); ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.5/datatables.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> 

    <script src="function/function.js"></script>
</body>


</html>