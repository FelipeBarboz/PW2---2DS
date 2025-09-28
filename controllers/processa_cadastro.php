<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mycine_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$email = $_POST['email'];
$username = $_POST['username'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];

if ($senha !== $confirmar_senha) {
    header("Location: ../index.php?aaa=cadastro&erro=senhas");
    exit();
}

$sql_verifica = "SELECT id FROM usuarios WHERE email = ?";
$stmt_verifica = $conn->prepare($sql_verifica);
$stmt_verifica->bind_param("s", $email);
$stmt_verifica->execute();
$stmt_verifica->store_result();

if ($stmt_verifica->num_rows > 0) {
    $stmt_verifica->close();
    $conn->close();
    header("Location: ../index.php?aaa=cadastro&erro=email");
    exit();
}
$stmt_verifica->close();

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (email, username, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $email, $username, $senha_hash);

if ($stmt->execute()) {
    header("Location: ../index.php?aaa=login&cadastro=sucesso");
    exit();
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
