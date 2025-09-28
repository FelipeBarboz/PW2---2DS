<?php
session_start();

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "mycine_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$username_input = $_POST['username'];
$senha = $_POST['senha'];

$sql = "SELECT id, username, senha FROM usuarios WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username_input);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($senha, $user['senha'])) {
        $_SESSION['usuario_id'] = $user['id'];
        $_SESSION['usuario_nome'] = $user['username'];

        header("Location: ../index.php?aaa=perfil");
        exit();
    } else {
        header("Location: ../index.php?aaa=login&erro=senha");
        exit();
    }
} else {
    header("Location: ../index.php?aaa=login&erro=usuario");
    exit();
}

$stmt->close();
$conn->close();
?>
