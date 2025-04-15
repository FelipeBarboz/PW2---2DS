<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = ""; // padrão do XAMPP
$dbname = "mycine_db"; // nome do banco que você criou

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Pegando os dados do formulário
$email = $_POST['email'];
$username = $_POST['username'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];

// Verificando se as senhas coincidem
if ($senha !== $confirmar_senha) {
    echo "As senhas não coincidem!";
    exit();
}

// Criptografando a senha
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// Preparando a query
$sql = "INSERT INTO usuarios (email, username, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $email, $username, $senha_hash);

// Executando
if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!";
    // Você pode redirecionar com header() se quiser
} else {
    echo "Erro: " . $stmt->error;
}

// Fechando conexões
$stmt->close();
$conn->close();
?>
