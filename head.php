<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
   
    <nav class="navbar navbar-primary bg-primary">
      <div class="container-fluid">
       
        <div class="row">
          <div class="col-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="col-2">
            <a class="navbar-brand" href="#">
              <img src="imgs/logotipo.png" alt="" width="50" height="50">
            </a>
          </div>
          <div class="col-7">
            <h2 class="bg-primary-text">COMPUTEX</h2>
          </div>
        </div>
          
      </div>
    </nav>
    
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
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

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
      <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with backdrop</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
      <div class="offcanvas-body">
        <p>.....</p>
      </div>
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdroped with scrolling</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <p>Try scrolling the rest of the page to see this option in action.</p>
      </div>
    </div>
