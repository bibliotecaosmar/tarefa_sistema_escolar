<?php

// Decode do json (GET)
$data_page = file_get_contents('http://camerascomputex.ddns.net:8080/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios');
$data_turma = file_get_contents('http://camerascomputex.ddns.net:8080/escola/ws_controller.php?action=getAlunosTurma&ano=20211&escola=1&grau_serie=15&turno=M&turma=1&status=C');

$page = json_decode($data_page);
$turma = json_decode($data_turma);

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
  <div class="row mb-2 mt-2">
    <div class="col"></div>
    <div class="col align-items-center">
      <h2>TURMA</h2>
      <a href="relatorio_turma.php" class="btn btn-primary">.PDF</a>
    </div>
    <div class="col"></div>
  </div>
  <div class="row align-items-center">
    <div class="col">
      <table class="table table-striped-columns">
        <thead>
          <tr class="table-dark">
            <th scope="col">#</th>
            <th scope="col">Matrícula</th>
            <th scope="col">Nome</th>
            <th scope="col">Sequência</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
        <?php
          for ($i=0; $i<25; $i++) {
  
            echo '<tr>';
            echo '  <th scope="row">' . $i+1 . '</th>';
            echo '  <td>' . $turma[$i]->matricula. '</td>';
            echo '  <td>' . $turma[$i]->nome. '</td>';
            echo '  <td>' . $turma[$i]->sequencia. '</td>';
            echo '  <td>' . $turma[$i]->status. '</td>';
            echo '</tr>';
        
          };
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php Include 'footer.php' ?>


