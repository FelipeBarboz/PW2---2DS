<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyCine Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #d2c4c2;
      }

      .navbar {
        background-color: #d2c4c2;
        padding: 15px 30px;
      }

      .logo-img {
        height: 40px;
      }

      .form-control {
        border-radius: 25px;
      }

      .login-btn {
        background-color: black;
        color: white;
        border: none;
        padding: 6px 12px;
        border-radius: 5px;
      }

      .nav-link {
        color: black !important;
        font-weight: 500;
      }

      .search-wrapper {
        flex-grow: 1;
        display: flex;
        justify-content: center;
      }

      .search-input {
        width: 60%;
      }
    </style>
  </head>
  <body>

    <nav class="navbar d-flex align-items-center">
      <!-- Botão Home com imagem -->
      <a href="?aaa=home">
        <img src="images/mycinee.png" alt="Logo MyCine" class="logo-img">
      </a>

      <div class="search-wrapper">
        <input class="form-control search-input" type="search" placeholder="Hinted search text" aria-label="Search">
      </div>

      <div class="d-flex align-items-center gap-3">
        <a class="nav-link" href="?aaa=cadastro">Cadastrar-se</a>
        <a href="?aaa=login">
          <button class="login-btn">Entrar</button>
        </a>
      </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
