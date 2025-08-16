<?php
session_start();
require_once __DIR__ . '/../config/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome      = trim($_POST['nome']);
    $duracao   = intval($_POST['duracao']);
    $genero    = trim($_POST['genero']);
    $descricao = trim($_POST['descricao']);

    // Upload da capa
    $capa_nome = null;
    if (isset($_FILES['capa']) && $_FILES['capa']['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES['capa']['name'], PATHINFO_EXTENSION);
        $capa_nome = uniqid("capa_") . "." . $ext;
        $destino = __DIR__ . "/../uploads/" . $capa_nome;

        // Garante que a pasta exista
        if (!is_dir(__DIR__ . "/../uploads")) {
            mkdir(__DIR__ . "/../uploads", 0777, true);
        }

        move_uploaded_file($_FILES['capa']['tmp_name'], $destino);
    }

    if (!empty($nome) && !empty($duracao) && !empty($genero) && !empty($descricao) && $capa_nome) {
        try {
            $sql = "INSERT INTO filmes (nome, duracao, genero, descricao, capa, criado_em) 
                    VALUES (?, ?, ?, ?, ?, NOW())";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$nome, $duracao, $genero, $descricao, $capa_nome]);

            echo "<p style='color: green; font-weight: bold;'>✅ Filme cadastrado com sucesso!</p>";
            echo "<a href='../index.php?aaa=filmes'>Voltar</a>";
        } catch (PDOException $e) {
            echo "<p style='color: red;'>Erro ao salvar filme: " . $e->getMessage() . "</p>";
        }
    } else {
        echo "<p style='color: red;'>⚠️ Preencha todos os campos e envie uma capa.</p>";
        echo "<a href='../index.php?aaa=filmes'>Voltar</a>";
    }
}
