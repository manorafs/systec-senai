<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>SysTec</title>
  </head>
<body>

<script src="js/bootstrap.bundle.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand">SysTec</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=pecas">Nova Peça</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=listar">Listar Peças</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col mt-5">
      <?php
        include("db/db.php");
        switch(@$_REQUEST["page"]){
          case "pecas":
            include("crud/novo.php");
          break;
          case "listar":
            include("crud/listar.php");
          break;
          case "salvar":
            include("validacao/salvar.php");
          break;
          case "editar":
            include("crud/editar.php");
          break;
          default:
             print "<h4>Bem Vindo!</h4>";
          }
      ?>
    </div>
  </div>
</div>

</body>
</html>