<?php

// Decode do json (GET)
$data_page = file_get_contents('http://camerascomputex.ddns.net:8080/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios');

$page = json_decode($data_page);

// Componentes da página
$config = $page->config;
$menu = $page->menu;
$escola = $page->escola;
$proximo_ano = $page->proximo_ano;
$proxima_serie = $page->proxima_serie;
$proximo_grau_serie = $page->proximo_grau_serie;
$boleto_processado = $page->boleto_processado;
$permissao_matricula = $page->permissao_matricula;
$data_aceite = $page->data_aceite;
$sti = $page->sti;

$subtitle = "Home";

?>

<?php Include 'head.php' ?>

<div class="container text-center">
  <div class="row mb-4">
    <div class="col"></div>
    <div class="col align-items-center">
      <h2>HOME</h2>
    </div>
    <div class="col"></div>
  </div>
</div>

<?php Include 'footer.php' ?>
