<?php
$host = "localhost";
$user = "root";
$password = "root";
$db = "csv_db 5";

$conn = mysqli_connect($host, $user, $password, $db);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} 
// else {

//     // Consulta SQL para buscar os dados do banco de dados MySQL
//     $sql = "SELECT * FROM rf_consultoria";
//     $result = mysqli_query($conn, $sql);

//     // Monta um array com os dados do banco de dados MySQL
//     $dados = array();
//     while ($row = mysqli_fetch_assoc($result)) {
//         $dados[] = $row;
//     }

//     // Converte os dados para o formato JSON e exibe o resultado
//     echo json_encode($dados);

//     // Fecha a conexão com o banco de dados MySQL
//     mysqli_close($conn);
// }
