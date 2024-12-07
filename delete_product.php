<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "produtos_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_produto = $_POST['numero_produto'];

    $sql = "DELETE FROM produtos WHERE numero_produto='$numero_produto'";
   
    if ($conn->query($sql) === TRUE) {
        echo "Produto excluído com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
}

$conn->close();
?>