<?php
// Configuração de caracteres e collation
$charset = "utf8mb4";
$collation = "utf8mb4_unicode_ci";

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testeu2";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Configuração de caracteres e collation da conexão
$conn->set_charset($charset);
$conn->query("SET NAMES '$charset' COLLATE '$collation'");
$conn->query("SET CHARACTER SET '$charset'");

// Recebendo os dados do formulário
$nome = $_POST['nome'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];

// Preparando os dados para a inserção
$nome = $conn->real_escape_string($nome);
$cep = $conn->real_escape_string($cep);
$endereco = $conn->real_escape_string($endereco);

// Inserindo os dados no banco de dados
$sql = "INSERT INTO cadastros (nome, cep, endereco) VALUES ('$nome', '$cep', '$endereco')";

if ($conn->query($sql) === TRUE) {
    // Redirecionamento para a página index.php com uma mensagem de sucesso
    header("Location: index.php?success=true");
    exit();
} else {
    // Redirecionamento para a página index.php com uma mensagem de erro
    header("Location: index.php?success=false&error=" . urlencode($conn->error));
    exit();
}


$conn->close();
?>
