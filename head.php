<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Escolar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar bg-primary bg-primary-text shadow mb-2 bg-body-primary">
      <div class="container-fluid text-center">
        <div class="row w-75">
          <button class="navbar-toggler col-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="col-1">
            <img src="imgs/logotipo.png" alt="" width="60" height="60" class="d-inline-block align-text-center">
          </div>
          <span class="navbar-brand fs-3 col-2 pt-2" href="#">
            Computex
          </span>
          <a id="Home" class="col-1 pt-3 nav-link fs-5 bg-primary-text" href="home.php">Home</a>
          <a id="Turma" class="col-1 pt-3 nav-link fs-5 bg-primary-text" href="turma.php">Turma</a>
          <div class="offcanvas offcanvas-start col-6" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasScrollingLabel">
                <img src="imgs/logotipo.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
                <h3 class="bg-primary-text">Computex<h3>
              </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
      </div>
    </div>
  </nav>

 
