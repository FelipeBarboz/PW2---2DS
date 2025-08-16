<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyCine Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<nav class="bg-gray-200 px-6 py-3 flex items-center justify-between shadow-md relative">
    <!-- Logo Home -->
    <a href="?aaa=home" class="flex items-center">
        <img src="views/images/mycinee.png" alt="Logo MyCine" class="h-10">
    </a>

    <!-- Barra de busca centralizada -->
    <div class="absolute left-1/2 transform -translate-x-1/2 w-full max-w-lg">
        <input type="search" placeholder="Pesquisar filmes..." 
               class="w-full px-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Links e botões -->
    <div class="flex items-center gap-4">
        <?php if (isset($_SESSION['usuario_id'])): ?>
            <a href="?aaa=perfil" class="text-gray-800 font-medium hover:text-blue-600">
                <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>
            </a>
            <a href="controllers/logout.php">
                <button class="bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800 transition-colors">
                    Sair
                </button>
            </a>
        <?php else: ?>
            <a href="?aaa=cadastro" class="text-gray-800 font-medium hover:text-blue-600">
                Cadastrar-se
            </a>
            <a href="?aaa=login">
                <button class="bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800 transition-colors">
                    Entrar
                </button>
            </a>
        <?php endif; ?>
    </div>
</nav>

</body>
</html>
