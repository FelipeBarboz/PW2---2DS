<?php
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../index.php?aaa=login&erro=acesso");
    exit();
}
?>

<div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 flex items-center justify-center p-6">
    <div class="bg-white shadow-2xl rounded-2xl p-10 w-full max-w-lg border border-gray-200">
        
        <h2 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">
            🎬 Adicionar Filme
        </h2>
        
        <form action="controllers/salvar_filme.php" method="POST" enctype="multipart/form-data" class="space-y-6">
            
            <!-- Nome -->
            <div>
                <label for="nome" class="block text-gray-700 font-semibold mb-2">Nome do Filme</label>
                <input type="text" id="nome" name="nome" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-50 text-gray-800 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
            </div>
            
            <!-- Duração -->
            <div>
                <label for="duracao" class="block text-gray-700 font-semibold mb-2">Duração (em minutos)</label>
                <input type="number" id="duracao" name="duracao" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-50 text-gray-800 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
            </div>
            
            <!-- Gênero -->
            <div>
                <label for="genero" class="block text-gray-700 font-semibold mb-2">Gênero</label>
                <select id="genero" name="genero" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-50 text-gray-800 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                    <option value="" disabled selected>Selecione um gênero</option>
                    <option value="Ação">Ação</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Comédia">Comédia</option>
                    <option value="Drama">Drama</option>
                    <option value="Ficção Científica">Ficção Científica</option>
                    <option value="Romance">Romance</option>
                    <option value="Terror">Terror</option>
                    <option value="Animação">Animação</option>
                    <option value="Suspense">Suspense</option>
                    <option value="Documentário">Documentário</option>
                </select>
            </div>
            
            <!-- Descrição -->
            <div>
                <label for="descricao" class="block text-gray-700 font-semibold mb-2">Descrição</label>
                <textarea id="descricao" name="descricao" rows="4" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-50 text-gray-800 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"></textarea>
            </div>
            
            <!-- Capa -->
            <div>
                <label for="capa" class="block text-gray-700 font-semibold mb-2">Capa do Filme</label>
                <input type="file" id="capa" name="capa" accept="image/*" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-50 text-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
            </div>
            
            <!-- Botão -->
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg shadow-md transition-transform transform hover:scale-[1.02]">
                💾 Salvar Filme
            </button>
        </form>
    </div>
</div>
