<div class="container mt-5">
  <h2>Login</h2>
  <form action="processa_login.php" method="POST">
    <div class="mb-3">
      <label for="username" class="form-label">Nome de usuário</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div>

    <div class="mb-3">
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" required>
    </div>

    <button type="submit" class="btn btn-success">Entrar</button>
  </form>
</div>

