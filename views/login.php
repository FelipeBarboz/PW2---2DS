<?php
if (isset($_GET['erro'])) {
    $mensagem = '';
    $bg = '';
    if ($_GET['erro'] === 'usuario') {
        $mensagem = 'Nome de usuário não encontrado!';
        $bg = 'bg-red-100 border-red-400 text-red-700';
    } elseif ($_GET['erro'] === 'senha') {
        $mensagem = 'Senha incorreta!';
        $bg = 'bg-red-100 border-red-400 text-red-700';
    } elseif ($_GET['erro'] === 'acesso') {
        $mensagem = 'Você precisa estar logado para acessar essa página.';
        $bg = 'bg-yellow-100 border-yellow-400 text-yellow-700';
    }
    echo "<div class='border px-4 py-3 rounded mb-4 $bg'>$mensagem</div>";
}
?>

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Login</h2>
        <form action="controllers/auth_controller.php" method="POST" class="space-y-4">
            <div>
                <label for="username" class="block text-gray-700 font-medium mb-1">Nome de usuário</label>
                <input type="text" id="username" name="username" required
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <div>
                <label for="senha" class="block text-gray-700 font-medium mb-1">Senha</label>
                <input type="password" id="senha" name="senha" required
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded transition-colors">
                Entrar
            </button>
        </form>
        <p class="text-center text-gray-500 text-sm mt-4">
            Não tem conta? <a href="index.php?aaa=cadastro" class="text-green-600 hover:underline">Cadastre-se</a>
        </p>
    </div>
</div>
