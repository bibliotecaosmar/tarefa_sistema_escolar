<?php

// Decode do json (GET)
$data_page = file_get_contents('http://camerascomputex.ddns.net:8080/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios');
$data_horario = file_get_contents('http://camerascomputex.ddns.net:8080/escola/json_horario_aluno.php?matricula=2011004&senha=99999999&ano=20211');

$page = json_decode($data_page);
$programacao = json_decode($data_horario);

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

//echo gettype($programacao->horario[0]->dia);

?>

<?php Include 'head.php' ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Escola</th>
      <th scope="col">Código da Série</th>
      <th scope="col">Série</th>
      <th scope="col">Turno</th>
      <th scope="col">Turma</th>
      <th scope="col">Código da Disciplina</th>
      <th scope="col">Disciplina</th>
      <th scope="col">Início</th>
      <th scope="col">Fim</th>
      <th scope="col">Professor</th>
    </tr>
  </thead>
  <tbody>
  <?php

      for ($i=0; $i<5; $i++) {
       
        $semana = $programacao->horario[$i];
        echo '<tr>';
        echo '  <th scope="row">#</th>';
        echo '  <td colspan="10" class="table-secondary">' . $semana->dia . '</td>';
        echo '</tr>';
        for ($j=0; $j<4; $j++) {
          
          $horarios = $semana->horarios[$j];
          echo '<tr>';
          echo '  <th scope="row">' . $j+1 . '</th>';
          echo '  <td>' . $horarios->escola . '</td>';
          echo '  <td>' . $horarios->codigo_serie . '</td>';
          echo '  <td>' . $horarios->serie . '</td>';
          echo '  <td>' . $horarios->turno . '</td>';
          echo '  <td>' . $horarios->turma . '</td>';
          echo '  <td>' . $horarios->codigo_disciplina . '</td>';
          echo '  <td>' . $horarios->disciplina . '</td>';
          echo '  <td>' . $horarios->inicio . '</td>';
          echo '  <td>' . $horarios->fim . '</td>';
          echo '  <td>' . $horarios->professor . '</td>';
          echo '</tr>';
        
        };
      
      };
  ?>

  </tbody>

</table>

<?php Include 'footer.php' ?>


