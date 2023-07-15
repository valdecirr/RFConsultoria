<?php
include_once('connect-bd.php');

$id = $_GET['id'];

$sql = "SELECT * FROM rf_consultoria WHERE ID = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
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
    </nav>

    <main class="principal">
        <div class="conteudo">
            <h2>Verificação do Registro</h2>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="Nome">Nome</label>
                    <input type="text" class="form-control" name="Nome" id="idNome" value="<? echo ($row['Nome']) ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="Dias">Dias</label>
                    <input type="text" class="form-control" name="Dias" id="idDias" value="<? echo ($row['Dias']) ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="Inicio">Início</label>
                    <input type="text" class="form-control" name="Inicio" id="idInicio" value="<? echo ($row['Inicio']) ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="Inicio">CheckInicio</label>
                    <input type="text" class="form-control" name="CheckInicio" id="idCheckInicio" value="<? echo ($row['CheckInicio']) ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="Inicio">InicioReal</label>
                    <input type="text" class="form-control" name="InicioReal" id="idInicioReal" value="<? echo ($row['InicioReal']) ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="Inicio">Término</label>
                    <input type="text" class="form-control" name="Termino" id="idTermino" disabled value="<? 
                    $data_inicial = $row['Inicio']; // data inicial armazenada em uma variável
                    $dias_adicionais = $row['Dias']; // quantidade de dias a ser adicionada
                    $data_final = date('d/m/Y', strtotime('+' . $dias_adicionais . ' days', strtotime(str_replace('/', '-', $data_inicial)))) ; // data final calculada adicionando os dias adicionais à data inicial
                    echo $data_final;
                    ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="Inicio">CheckFinal</label>
                    <input type="text" class="form-control" name="CheckFinal" id="idCheckFinal" value="<? echo ($row['CheckFinal']) ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="Inicio">FinalReal</label>
                    <input type="text" class="form-control" name="FinalReal" id="idFinalReal" value="<? echo ($row['FinalReal']) ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="Inicio">Status</label>
                    <input type="text" class="form-control" name="Status" id="idStatus" value="<? echo ($row['Status']) ?>">
                </div>
                <div class="form-group col-md-12">
                    <label for="Inicio">OBS</label>
                    <input type="text" class="form-control" name="OBS" id="idOBS" value="<? echo ($row['OBS']) ?>">
                </div>
            </div>
            <div class="form-row" style=" display: flex; justify-content: flex-end;">
                <button class="btn btn-primary">Atualizar</button>
            </div>
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