<?php if (isset($_GET['erro']) && $_GET['erro'] === 'senhas'): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
        As senhas não coincidem!
    </div>
<?php endif; ?>

<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Cadastro</h2>
        <form action="controllers/processa_cadastro.php" method="POST" class="space-y-4">
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">E-mail</label>
                <input type="email" id="email" name="email" required 
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="username" class="block text-gray-700 font-medium mb-1">Nome de usuário</label>
                <input type="text" id="username" name="username" required 
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="senha" class="block text-gray-700 font-medium mb-1">Senha</label>
                <input type="password" id="senha" name="senha" required 
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="confirmar_senha" class="block text-gray-700 font-medium mb-1">Confirmar senha</label>
                <input type="password" id="confirmar_senha" name="confirmar_senha" required 
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition-colors">
                Cadastrar
            </button>
        </form>
        <p class="text-center text-gray-500 text-sm mt-4">
            Já tem conta? <a href="login.php" class="text-blue-600 hover:underline">Faça login</a>
        </p>
    </div>
</div>
