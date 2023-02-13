<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema Escolar - <?php echo $subtitle ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
       <span class="navbar-toggler-icon"></span>
    </button>
    
    <img src="imgs/logotipo.png" alt="" width="45" height="45" class="d-inline-block align-text-center">

    <a class="navbar-brand fs-4" href="#">Computex</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a id="Home" class="nav-link active" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a id="Turma" class="nav-link" href="turma.php">Turma</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5>
      <img src="imgs/logotipo.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
      <h3 class="bg-primary-text">Computex<h3>
    </h5>
    <button type="button" class="btn-close mb-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="list-group list-group-flush">
      <?php
        for ($i=0; $i<17; $i++) {
          echo '<a type="button" class="list-group-item list-group-item-action" href=' . $menu[$i]->link . '>' . '<img src=imgs/' . $menu[$i]->icone . ' width=20 height=20 class="d-inline-block align-text-top"> ' . $menu[$i]->titulo . ' - ' . $menu[$i]->opc . '</a>';
          }; 
      ?>
    </div>
   </div>
</div>
