<?php
require_once __DIR__ . '/../config/db.php';

try {
    $stmt = $conn->query("SELECT id, nome, capa, genero, duracao, descricao FROM filmes ORDER BY criado_em DESC");
    $filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<p class='text-red-600'>Erro ao carregar filmes: " . $e->getMessage() . "</p>";
    $filmes = [];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<!-- Em Alta -->
<section class="mb-8">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Em alta</h2>
    <div class="flex items-center">
        <button class="text-2xl mr-2 p-2 bg-white rounded-full shadow hover:bg-gray-200">&#8592;</button>
        <div class="flex overflow-x-auto gap-4 scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
            <?php foreach ($filmes as $filme): ?>
                <a href="filme.php?id=<?= $filme['id'] ?>" class="flex-shrink-0 w-32 hover:scale-105 transform transition duration-200">
                    <div class="relative group">
                        <img src="uploads/<?= htmlspecialchars($filme['capa']) ?>" class="rounded-lg w-full h-48 object-cover" alt="<?= htmlspecialchars($filme['nome']) ?>">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center text-white text-xs p-2 rounded-lg transition-opacity">
                            <?= strlen($filme['descricao']) > 50 ? substr($filme['descricao'], 0, 50) . "..." : htmlspecialchars($filme['descricao']) ?>
                        </div>
                    </div>
                    <h3 class="text-sm font-semibold mt-1 text-gray-800"><?= htmlspecialchars($filme['nome']) ?></h3>
                    <p class="text-xs text-gray-500"><?= htmlspecialchars($filme['genero']) ?> | <?= htmlspecialchars($filme['duracao']) ?> min</p>
                </a>
            <?php endforeach; ?>
        </div>
        <button class="text-2xl ml-2 p-2 bg-white rounded-full shadow hover:bg-gray-200">&#8594;</button>
    </div>
</section>

<!-- Recomendados -->
<section>
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Recomendados</h2>
    <div class="flex items-center">
        <button class="text-2xl mr-2 p-2 bg-white rounded-full shadow hover:bg-gray-200">&#8592;</button>
        <div class="flex overflow-x-auto gap-4 scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200">
            <?php foreach ($filmes as $filme): ?>
                <a href="filme.php?id=<?= $filme['id'] ?>" class="flex-shrink-0 w-32 hover:scale-105 transform transition duration-200">
                    <div class="relative group">
                        <img src="uploads/<?= htmlspecialchars($filme['capa']) ?>" class="rounded-lg w-full h-48 object-cover" alt="<?= htmlspecialchars($filme['nome']) ?>">
                        <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex items-center justify-center text-white text-xs p-2 rounded-lg transition-opacity">
                            <?= strlen($filme['descricao']) > 50 ? substr($filme['descricao'], 0, 50) . "..." : htmlspecialchars($filme['descricao']) ?>
                        </div>
                    </div>
                    <h3 class="text-sm font-semibold mt-1 text-gray-800"><?= htmlspecialchars($filme['nome']) ?></h3>
                    <p class="text-xs text-gray-500"><?= htmlspecialchars($filme['genero']) ?> | <?= htmlspecialchars($filme['duracao']) ?> min</p>
                </a>
            <?php endforeach; ?>
        </div>
        <button class="text-2xl ml-2 p-2 bg-white rounded-full shadow hover:bg-gray-200">&#8594;</button>
    </div>
</section>

</body>
</html>
