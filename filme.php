<?php
require_once __DIR__ . '/config/db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<p class='text-red-600'>Filme não encontrado.</p>";
    exit;
}

$id = intval($_GET['id']);

try {
    $stmt = $conn->prepare("SELECT * FROM filmes WHERE id = ?");
    $stmt->execute([$id]);
    $filme = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$filme) {
        echo "<p class='text-red-600'>Filme não encontrado.</p>";
        exit;
    }
} catch (PDOException $e) {
    echo "<p class='text-red-600'>Erro ao carregar filme: " . $e->getMessage() . "</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($filme['nome']) ?> - MyCine</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-4xl mx-auto bg-white rounded-lg shadow p-6">
    <div class="flex flex-col md:flex-row gap-6">
        <img src="uploads/<?= htmlspecialchars($filme['capa']) ?>" class="w-full md:w-64 h-auto rounded-lg object-cover" alt="<?= htmlspecialchars($filme['nome']) ?>">
        
        <div class="flex-1">
            <h1 class="text-3xl font-bold text-gray-800 mb-2"><?= htmlspecialchars($filme['nome']) ?></h1>
            <p class="text-gray-600 mb-1"><strong>Gênero:</strong> <?= htmlspecialchars($filme['genero']) ?></p>
            <p class="text-gray-600 mb-1"><strong>Duração:</strong> <?= htmlspecialchars($filme['duracao']) ?> min</p>
            <p class="text-gray-700 mt-4"><?= nl2br(htmlspecialchars($filme['descricao'])) ?></p>
            
            <a href="index.php?aaa=home" class="inline-block mt-6 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Voltar</a>
        </div>
    </div>
</div>

</body>
</html>
