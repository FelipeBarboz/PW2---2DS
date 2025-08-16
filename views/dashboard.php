<?php
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../index.php?aaa=login&erro=acesso");
    exit();
}
?>

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">
            Bem-vindo ao seu Dashboard, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!
        </h1>

        <p class="text-gray-600 mb-6">
            Aqui você pode gerenciar seus filmes e acessar todas as funcionalidades do sistema.
        </p>

        <button 
            onclick="window.location.href='index.php?aaa=filmes'"
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded transition-colors">
            Ir para Filmes
        </button>
    </div>
</div>
