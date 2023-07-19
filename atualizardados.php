<?php

include_once("connect-bd.php");

if (isset($_POST['update'])) {

    $id = $_POST['resultID'];
    $nome = $_POST['Nome'];
    $dias = $_POST['Dias'];
    $inicio = $_POST['Inicio'];
    $checkinicio = $_POST['CheckInicio'];
    $inicioreal = $_POST['InicioReal'];
    $termino = $_POST['Termino'];
    $checkfinal = $_POST['CheckFinal'];
    $finalreal = $_POST['FinalReal'];
    $status = $_POST['Status'];
    $obs = $_POST['OBS'];

    $sql = "UPDATE rf_consultoria  SET Nome='$nome',Dias='$dias',Inicio='$inicio',CheckInicio='$checkinicio',InicioReal='$inicioreal',Termino='$termino',CheckFinal='$checkfinal',FinalReal='$finalreal',Status='$status',OBS='$obs' WHERE ID='$id'";

    // echo $sql;
    $result = $conn->query($sql);

    if ($result) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os dados!";
    }
}
    header('Location: empresas.php');

?>