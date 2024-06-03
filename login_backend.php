<?php
session_start();
$servername = "localhost"; // Alterar conforme necessário
$username = "root"; // Alterar conforme necessário
$password = "vertrigo"; // Alterar conforme necessário
$dbname = "pti_database"; // Alterar conforme necessário

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter dados do formulário
$user = $_POST['username'];
$pass = $_POST['password'];

// Buscar usuário no banco de dados
$sql = "SELECT id, username, password FROM usuarios WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Verificar senha
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        // Senha correta
        $_SESSION['username'] = $row['username'];
        echo "Login bem-sucedido! Bem-vindo, " . $_SESSION['username'] . ".";
        // Redirecionar para a página inicial ou painel do usuário
        header("Location: consulta_servico.php");
    } else {
        // Senha incorreta
        echo "Senha incorreta.";
    }
} else {
    // Usuário não encontrado
    echo "Usuário não encontrado.";
}

$stmt->close();
$conn->close();
?>
