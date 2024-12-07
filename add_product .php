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
    $nome_peca = $_POST['nome_peca'];
    $valor = $_POST['valor'];

    $sql = "INSERT INTO produtos (numero_produto, nome_peca, valor) VALUES ('$numero_produto', '$nome_peca', '$valor')";
   
    if ($conn->query($sql) === TRUE) {
        echo "Produto adicionado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>