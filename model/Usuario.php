<?php
class Usuario {
    private $conn;

    public function __construct() {
        // Conectar ao banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cadastro";

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
    }

    public function cadastrarUsuario($email, $username, $senha) {
        // Hash da senha para segurança
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        // Preparar a consulta
        $stmt = $this->conn->prepare("INSERT INTO usuarios (email, username, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $username, $senha_hash);

        // Executar e retornar o resultado
        return $stmt->execute();
    }

    public function __destruct() {
        // Fechar a conexão
        $this->conn->close();
    }
}
?>
