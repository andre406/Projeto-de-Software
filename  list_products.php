<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "produtos_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

if ($result === FALSE) {
    echo "Erro ao buscar produtos: " . $conn->error;
} elseif ($result->num_rows > 0) {
    echo "<table><tr><th>Número do Produto</th><th>Nome da Peça</th><th>Valor</th><th>Ações</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['numero_produto']}</td><td>{$row['nome_peca']}</td><td>{$row['valor']}</td>
              <td><button onclick=\"deleteProduct('{$row['numero_produto']}')\">Excluir</button></td></tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum produto encontrado.";
}

$conn->close();
?>