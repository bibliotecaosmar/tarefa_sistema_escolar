<?php

// Decode do json (GET)
$data_page = file_get_contents('http://camerascomputex.ddns.net:8080/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios');
$data_acesso_aluno = file_get_contents('http://camerascomputex.ddns.net:8080/escola/ws_controller.php?action=getTurmas&ano=20211');

$page = json_decode($data_page);
$acesso_aluno = json_decode($data_acesso_aluno);

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

?>

<?php Include 'head.php' ?>
<div class="container text-center">
  <div class="row">
    <div class="col"></div> 
    <div class="col align-items-center"> 
      <h2>ACESSO</h2>
    </div>
    <div class="col"></div>
  </div>
  <div class="row align-items-center">
    <div class="col">
      <table class="table table-striped-columns">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Código da Escola</th>
            <th scope="col">Ano</th>
            <th scope="col">Grau da Série</th>
            <th scope="col">Turno</th>
            <th scope="col">Turma</th>
            <th scope="col">Grau Longo</th>
            <th scope="col">Série Longa</th>
          </tr>
        </thead>
        <tbody>
        <?php
          for ($i=0; $i<34; $i++) {
  
            $acesso = $acesso_aluno[$i];
            echo '<tr>';
            echo '  <th scope="row">' . $i+1 . '</th>';
            echo '  <td>' . $acesso->codigo_escola . '</td>';
            echo '  <td>' . $acesso->ano . '</td>';
            echo '  <td>' . $acesso->grau_serie . '</td>';
            echo '  <td>' . $acesso->turno . '</td>';
            echo '  <td>' . $acesso->turma . '</td>';
            echo '  <td>' . $acesso->grau_longo . '</td>';
            echo '  <td>' . $acesso->serie_longa . '</td>';
            echo '</tr>';
        
          };
        ?>

        </tbody>

      </table>
    </div>
  </div>
</div>



<?php Include 'footer.php' ?>

