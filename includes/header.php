<!-- includes/header.php -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bras-Mol</title>

  <!-- Favicon -->
  <link rel="icon" href="assets/imagens/Brasmol.png" type="image/png">

  <!-- Importação de estilos do Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
  <header class="navbar navbar-expand-lg sticky-top p-4" id="cabecalho">
    <div class="container">
      <a href="index.php" id="logo-container">
        <img src="/assets/imagens/brasmol-logo-white.png" alt="Logotipo Bras-Mol" id="logo-header">
      </a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu-navegacao">
        <span class="navbar-toggler-icon"></span>
      </button>
      <nav class="navbar-collapse collapse justify-content-end" id="menu-navegacao">
        <ul class="nav nav-pills d-block d-md-flex">
          <li class="nav-item fw-bold">
            <a href="index.php" class="nav-link"><i class="bi bi-house-door me-1"></i>Início</a>
          </li>
          <li class="nav-item fw-bold">
            <a href="#sobre" class="nav-link"><i class="bi bi-info-circle me-1"></i>Sobre</a>
          </li>
          <li class="nav-item fw-bold">
            <a href="#produtos" class="nav-link"><i class="bi bi-card-text me-1"></i>Produtos</a>
          </li>
          <li class="nav-item fw-bold">
            <a href="#rodape" class="nav-link"><i class="bi bi-chat-left-text me-1"></i>Fale conosco</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Importação do JavaScript do Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>