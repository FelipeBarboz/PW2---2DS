<div class="container mt-5">
  <h2>Cadastro</h2>
  <form action="control/processa_cadastro.php" method="POST">
    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
      <label for="username" class="form-label">Nome de usuário</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div>

    <div class="mb-3">
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" required>
    </div>

    <div class="mb-3">
      <label for="confirmar_senha" class="form-label">Confirmar senha</label>
      <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" required>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>
