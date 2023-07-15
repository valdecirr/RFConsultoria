<?php
//configurações de conexão ao banco de dados

$servername = "localhost";
$username = "usuario";
$password = "senha";
$dbname = "meubanco";

//cria conexão ao banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

//verifica se ocorreu um erro na conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

//verifica os dados enviados via POST
if (isset($_POST["submit"])) {
    $id = $_POST['id'];
    $campo1 = $_POST['campo1'];
    $campo2 = $_POST['campo2'];
    $campo3 = $_POST['campo3'];
    $campo4 = $_POST['campo4'];
    $campo5 = $_POST['campo5'];

    //comando SQL para atualizar os dados na tabela "minhatabela"
    $sql = "UPDATE minhatabela SET campo1='$campo1', campo2='$campo2', campo3='$campo3', campo4='$campo4', campo5='$campo5' WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao tentar atualizar os dados: " . mysqli_error($conn);
    }

    //fecha conexão ao banco de dados
    mysqli_close($conn);
}
